<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $lang = $_POST['page_type'] ?? null;

    if ($lang == "en" || $lang == "hi") {
        include_once("connection.php");

        try {
           
            $db->beginTransaction();
            $stmt = $db->prepare("SELECT count FROM mcl_visitor_counter WHERE lang = :lang FOR UPDATE");
            $stmt->execute(['lang' => $lang]);
            $row = $stmt->fetch();

            if ($row) {
                $newCount = $row['count'] + 1;
                $updateStmt = $db->prepare("UPDATE mcl_visitor_counter SET count = :counter WHERE lang = :lang");
                $updateStmt->execute(['counter' => $newCount, 'lang' => $lang]);
                $db->commit();

                echo $newCount;
            } else {
                $db->rollBack();
                echo "Language not found.";
            }
        } catch (PDOException $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            echo "Database error: " . $e->getMessage();
        }

    } else {
        echo "Invalid or missing language.";
    }
} else {
    echo "Something went wrong. Please try again later.";
}
?>
