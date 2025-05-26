<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('connection.php');

    if (isset($_POST['query']) && isset($_POST['lang_type'])) {
        $query = $_POST['query'];
        $lang_type = $_POST['lang_type'];

        $stmt = $db->prepare("SELECT name, url FROM mcl_search_pages WHERE name LIKE :query AND lang_type = :lang_type LIMIT 5");
        $stmt->execute([
            ':query' => "%$query%",
            ':lang_type' => $lang_type
        ]);

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="suggestion-item" data-url="' . htmlspecialchars($row['url']) . '">' . ucwords(htmlspecialchars($row['name'])) . '</div>';
            }
        } else {
            echo '<div class="suggestion-item">No results found</div>';
        }
    }
}
?>
