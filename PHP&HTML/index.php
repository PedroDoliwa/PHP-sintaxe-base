<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            padding: 20px;
        }
        td{
            padding: 20px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Profissao</th>
            <th>CPF</th>
        </tr>

        <?php
            $pessoas = [
                [
                    "nome" => "Pedro",
                    "idade" => "22",
                    "profissao" => "Desenvolvedor",
                    "cpf" => "111.222.333.44"
                ], 
                [
                    "nome" => "Ana",
                    "idade" => "25",
                    "profissao" => "Marketing",
                    "cpf" => "488.235.180.00" 
                ]
            ];
            
        foreach ($pessoas as $key => $pessoa) :
        ?>

        <tr>
            <td><?php echo $pessoa["nome"];?></td>
            <td><?php echo $pessoa["idade"];?></td>
            <td><?php echo $pessoa["profissao"];?></td>
            <td><?php echo $pessoa["cpf"];?></td>
        </tr>

        <?php
            endforeach;
        ?>

    </table>   
</body>
</html>