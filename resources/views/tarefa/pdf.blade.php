<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style>
            .page-break {
                page-break-after:always;
            }
            .titulo {
                border: 1px;
                background-color:#c2c2c2;
                text-align:center;
                width:100%;
                text-transform:uppercase;
                font-weight:bold;
                margin-bottom:25px;
            }
            table th {
                text-align:left;
            }
        </style>
    
    </head>
    <body>
        <div class="titulo">Lista de tarefas</div>

        <table width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Data limite de conclusão</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $key => $tarefa)
                    <tr>
                        <td>{{ $tarefa->id }}</td>
                        <td>{{ $tarefa->tarefa }}</td>
                        <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                    </tr>
            
                @endforeach
            </tbody>
        </table>
        
        <div class="page-break"></div>
        <h1>Página 2</h1>
    </body>
</html>