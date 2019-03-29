<?php require_once 'connect.php' ?>
<?php require_once 'Contact.php' ?>

<?php

function contactInformation()
{
    $pdo = new PDO(DSN,USER,PASS);
    $query = $pdo->query('SELECT * FROM contact ORDER BY lastname');
    $contacts = $query->fetchAll(PDO::FETCH_CLASS,'Contact');
    $query->closeCursor();

    foreach ($contacts as $contact){
        $firstname = $contact->getFirstname();
        $lastname = $contact->getLastname();
        $civility = $contact->getCivilityId();
        $fullname = fullname($firstname, $lastname); ?>
        <tr>
            <th scope="row"></th>
            <td><?= $fullname ?></td>
            <td><?= civility($civility) ?></td>
        </tr>
    <?php }
}

?>

<?php

function fullname(string $value1,string $value2):string
{
    return $fullname = strtoupper($value2) . ' ' . ucfirst($value1);
}

?>

<?php

function civility($value)
{
    $pdo = new PDO(DSN,USER,PASS);
    $query = $pdo->query("SELECT * FROM civility WHERE id=$value");
    $civilitys = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();

    foreach ($civilitys as $civility){
        return $civility['civility'];
    }

}

?>

<?php

function testInput($value) {
    $result = trim($value);
    $result = stripslashes($result);
    $result = htmlspecialchars($result);
    return $result;
}
