<head>
    <title>Catálogo periodicos</title>
</head>

<body>
    <h1>periodicos dados de alta en nuestra libreria</h1>
    <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>FECHA</th>

        </tr>

        <?php
        
        foreach ($periodicos as $p) {
        ?>
            <tr>
                <td><?php echo $p['nombre'] ?></td>
                <td><?php echo $p['fecha'] ?></td>
            </tr>

        <?php
        }
        ?>

    </table>
</body>

</html>