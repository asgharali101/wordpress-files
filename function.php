<?php
$books = [

    [
        'name' => 'web designer',
        'auther' => 'Asghar',
        'Publish' => '2020',
    ],
    [
        'name' => 'Tailwindcss',
        'auther' => 'Ahmed',
        'Publish' => '2022',
    ],
    [
        'name' => 'JS and its projects',
        'auther' => 'Asghar',
        'Publish' => '2023',
    ],

];
?>
<ol>
    <table border="1">
        <?php foreach ($books as $data): ?>

        <?php if ($data['auther'] === 'Asghar'): ?>


        <tr>
            <td>
                <?php echo $data['name']; ?>
            </td>
            <td>
                <?php echo $data['auther']; ?>
            </td>
            <td>
                <?php echo $data['Publish']; ?>
            </td>
        </tr>


        <?php endif ?>
        <?php endforeach; ?>
    </table>

</ol>
function () {

}


?>