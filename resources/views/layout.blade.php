<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Sistema de Tarefas</title>
</head>
<body class="flex flex-col min-h-screen">
    <header class="bg-neutral-800 py-6 px-12">
        <nav class="space-x-2 text-neutral-100">
            <h1 class="font-medium text-2xl">Sistema de Tarefas</h1>
        </nav>
    </header>
    <main class="px-12 py-6">
        @yield('conteudo')
    </main>
    <footer class="bg-neutral-800 text-neutral-100 py-4 flex justify-center mt-auto">
        <p>Todos os direitos reservados. © <?= date('Y') ?></p>
    </footer>
    <script src="/resources/js/script.js"></script>
</body> 
</html>