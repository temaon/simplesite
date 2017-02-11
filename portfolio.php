<?php include 'data.php' ?>
<?php include 'components/header.php' ?>
<div id="page">
    <?php include 'components/main_menu.php' ?>
    <h1>Портфолио</h1>
    <p>
    <table>
        Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
        <tr>
            <td>Год</td>
            <td>Проект</td>
            <td>Описание</td>
        </tr>
        <?php

        foreach (get_data() as $row) {
            echo '<tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr>';
        }

        ?>
    </table>
    </p>
</div>
<?php include 'components/bottom.php' ?>
<?php include 'components/footer.php' ?>
