<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de Teste Moderna</title>
    {{-- A diretiva @vite irá carregar e processar o Tailwind CSS --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-gray-50 to-slate-200 min-h-screen flex flex-col font-sans text-gray-800">

    <!-- Cabeçalho -->
    <header class="bg-white/80 backdrop-blur-lg shadow-sm sticky top-0">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-slate-800">
                <a href="#">Aula 02</a>
            </div>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Início</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Recursos</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Contato</a>
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition-transform duration-300 hover:scale-105">Começar</a>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="flex-grow container mx-auto px-6 py-16 text-center">
        
        <!-- Seção de Destaque -->
        <section class="max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 mb-4 leading-tight">
                Uma Página de Teste <span class="text-blue-600">Moderna e Estilizada</span>
            </h1>
            <p class="text-lg text-gray-600 mb-8">
                Tentando estilizar a página de teste com Tailwind CSS e Vite, aproveitando o poder do design utilitário para criar uma interface limpa e responsiva.
            </p>
            <a href="#" class="bg-slate-900 text-white px-8 py-3 rounded-full font-semibold text-lg hover:bg-slate-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Explorar Funcionalidades
            </a>
        </section>

        <!-- Seção de Cards -->
        <section class="mt-20 grid md:grid-cols-3 gap-8 text-left">
            
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-2">
                <div class="bg-blue-100 text-blue-600 rounded-full h-12 w-12 flex items-center justify-center mb-4">
                    <!-- Ícone SVG: Velocidade -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Rápido e Leve</h3>
                <p class="text-gray-600">Compilação quase instantânea com Vite, resultando em uma experiência de desenvolvimento fluida.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-2">
                <div class="bg-green-100 text-green-600 rounded-full h-12 w-12 flex items-center justify-center mb-4">
                    <!-- Ícone SVG: Componentes -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Design com Utilidades</h3>
                <p class="text-gray-600">Tailwind CSS permite criar designs complexos diretamente no HTML, sem sair do seu fluxo.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-2">
                <div class="bg-purple-100 text-purple-600 rounded-full h-12 w-12 flex items-center justify-center mb-4">
                    <!-- Ícone SVG: Responsivo -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Totalmente Responsivo</h3>
                <p class="text-gray-600">O layout se adapta perfeitamente a qualquer tamanho de tela, de celulares a desktops.</p>
            </div>

        </section>
    </main>

    <!-- Rodapé -->
    <footer class="bg-white mt-16">
        <div class="container mx-auto px-6 py-4 text-center text-gray-500">
            <p>&copy; 2025. Todos os direitos reservados. Feito por vinizinhoo ♥</p>
        </div>
    </footer>

</body>
</html>