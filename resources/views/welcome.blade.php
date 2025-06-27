<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo a MOVE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex items-center justify-center px-4">
    <div class="bg-white shadow-2xl rounded-2xl p-8 max-w-md w-full text-center">
        <!-- Logotipo -->
        <img src='images/logo-empresa.png' class="mx-auto w-24 mb-6">

        <!-- Título -->
        <h1 class="text-3xl font-bold mb-2">👋 Bem-vindo a MOVE</h1>
        <p class="text-gray-600 mb-6">Sistema para envio e visualização de laudos médicos.</p>

        <!-- Se o usuário estiver logado, mostra o nome -->
        @auth
            <p class="text-green-600 font-semibold mb-4">Você está logado como {{ Auth::user()->name }}</p>
            <a href="{{ route('dashboard') }}"
               class="block w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg mb-3 transition">
               Acessar Dashboard
            </a>
        @else
            <!-- Apenas o botão de login -->
            <a href="{{ route('login') }}"
               class="block w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
               Entrar no sistema
            </a>
        @endauth
    </div>
     <!-- Botão de acesso administrador fixo no canto inferior direito -->
    <a href="{{ route('admin.login') }}" 
       class="fixed bottom-6 right-6 bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-5 rounded-full shadow-lg transition"
       title="Acesso Administrador">
        Admin
    </a>
</body>
</html>

