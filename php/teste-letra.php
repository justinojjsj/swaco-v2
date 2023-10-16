<html>

    <style type="text/css">
        /* Aqui define o tamanho base, não precisa ser em px */
        body {
        font-size: 20px;
        }

        /* Os botões ficaram do mesmo tamanho idependentemente do tamanho */
        button {
        font-size: 20px;
        }

        /* Os outros vão aumentar/diminuir proporcionalmente */
        h1 {
        font-size: 1.5em
        }
        p {
        font-size: 1em
        }
        span {
        font-size: 0.5em
        }
    </style>


    <body>
        <button> Pequeno </button>
        <button> Médio </button>
        <button> Grande </button>

        <h1>Texto grande</h1>
        <p>Texto médio</p>
        <span>Texto pequeno</span>
    </body>


    <script>
        const btns = document.getElementsByTagName('button');

        //Muda a fonte do corpo da página para 5px 
        btns[0].addEventListener('click', () => document.body.style.fontSize = '5px');

        //Muda a fonte do corpo da página para 20px
        btns[1].addEventListener('click', () => document.body.style.fontSize = '20px');

        //Muda a fonte do corpo da página para 35px
        btns[2].addEventListener('click', () => document.body.style.fontSize = '35px');

    </script>
</html>