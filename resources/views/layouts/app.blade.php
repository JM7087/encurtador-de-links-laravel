<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/link.png') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Encurtador de Links</title>

    <!-- Adicione aqui seus links para estilos CSS -->
    <link href="{{ asset('css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Fim dos estilos CSS -->

    <!-- responsividade para celular -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="bg-primary text-white text-center py-3">
        <div align="center" class="credit">
            <a href="https://grupo.jm7087.com" class="cor-link-rodape">Grupo JM7087</a>
            © Copyright 2010-<script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>
            . Todos os direitos reservados. Desenvolvido <span class="cor-nome-dev-rodape"> João Marcos</span><span
                class="texto-rodape">.
        </div>
    </footer>

    <script src="{{ asset('js/clipboard.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var clipboard = new ClipboardJS('.btn');

            clipboard.on('success', function (e) {
                var copyMessage = document.getElementById('copy-message');
                copyMessage.style.display = 'block';
                setTimeout(function () {
                    copyMessage.style.display = 'none';
                }, 3000); // Ocultar a mensagem após 3 segundos
                e.clearSelection();
            });

            clipboard.on('error', function (e) {
                console.error('Action:', e.action);
                console.error('Trigger:', e.trigger);
            });
        });
    </script>

</body>

</html>