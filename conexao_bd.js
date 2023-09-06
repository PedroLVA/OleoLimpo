const mysql = require('mysql2');

const conexao = mysql.createConnections({
    host: 'fdb1034.awardspace.net',
    user: '4045440_oleodobem',
    password: 'FutureMinds2023??',
    database: '4045440_oleodobem';
});

conexao.connect( function (err){
     console.log("conexão realizada com sucesso!!")
});