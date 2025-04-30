<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - GED System Sicoob Cruz Alta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333333;
        }
        
        .sidebar {
            background-color: #ffffff;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .sidebar-item {
            transition: all 0.3s ease;
        }
        
        .sidebar-item:hover {
            background-color: rgba(0, 126, 58, 0.1);
        }
        
        .sidebar-item.active {
            background-color: rgba(0, 126, 58, 0.15);
            border-left: 4px solid #007e3a;
            color: #007e3a;
            font-weight: 500;
        }
        
        .main-content {
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .search-bar {
            background-color: #f8f8f8;
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
        }
        
        .search-bar:focus-within {
            box-shadow: 0 0 0 2px rgba(0, 126, 58, 0.3);
            border-color: #007e3a;
        }
        
        .document-card {
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
            background-color: #ffffff;
        }
        
        .document-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-color: rgba(0, 126, 58, 0.5);
        }
        
        .action-button {
            transition: all 0.2s ease;
        }
        
        .action-button:hover {
            transform: translateY(-1px);
        }
        
        .create-button {
            background-color: #007e3a;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 126, 58, 0.2);
        }
        
        .create-button:hover {
            background-color: #00692f;
            box-shadow: 0 4px 8px rgba(0, 126, 58, 0.3);
        }
        
        /* Cores oficiais do Sicoob */
        .bg-sicoob-green {
            background-color: #007e3a;
        }
        
        .text-sicoob-green {
            color: #007e3a;
        }
        
        .border-sicoob-green {
            border-color: #007e3a;
        }
        
        /* Efeito de gradiente no header */
        .header-gradient {
            background: linear-gradient(135deg, #007e3a 0%, #00a859 100%);
        }
        
        /* Ícones ativos */
        .sidebar-item.active i {
            color: #007e3a;
        }
    </style>
</head>
<body class="min-h-screen">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="sidebar w-64 flex flex-col h-full">
            <!-- Logo -->
            <div class="p-4 flex items-center justify-center border-b border-gray-200">
                <div class="flex items-center">
                    <img src="images/sicoob.png" alt="Sicoob Logo" class="h-8 mr-2">
                    <div>
                        <div class="font-bold text-sm text-sicoob-green">SICOOB CRUZ ALTA</div>
                        <div class="text-xs text-gray-500">GED - Gestão Eletrônica de Documentos</div>
                    </div>
                </div>
            </div>
            
            <!-- Create Button -->
            <div class="p-4">
                <button class="create-button w-full flex items-center justify-center text-white rounded-md py-2 px-4 font-medium">
                    <i class='bx bx-plus mr-2'></i> Criar ou Carregar
                </button>
            </div>
            
            <!-- Menu Items -->
            <nav class="flex-1 overflow-y-auto">
                <ul class="px-2">
                    <li class="mb-1">
                        <a href="#" class="sidebar-item active flex items-center px-4 py-3 rounded-md">
                            <i class='bx bx-home-alt text-xl mr-3'></i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-gray-600 rounded-md">
                            <i class='bx bx-folder text-xl mr-3'></i>
                            <span>ARQUIVOS</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-gray-600 rounded-md">
                            <i class='bx bx-trash-alt text-xl mr-3'></i>
                            <span>LIXEIRA</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-gray-600 rounded-md">
                            <i class='bx bx-archive text-xl mr-3'></i>
                            <span>BACKUP</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-gray-600 rounded-md">
                        <i class='bx bxs-star text-xl mr-3'></i>
                            <span>Novidades</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- User Profile -->
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-sicoob-green flex items-center justify-center text-white">
                        <i class='bx bx-user text-xl'></i>
                    </div>
                    <div class="ml-3">
                        <div class="font-medium text-sm">xxxxx.x5166</div>
                        <div class="text-xs text-gray-500">Administrador</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="header-gradient shadow-md">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-xl font-semibold text-white">SISTEMA GED - Inicio</h1>
                    <!-- Search Bar -->
                    <div class="flex-1 max-w-lg mx-6">
                        <div class="search-bar flex items-center rounded-md px-3 py-2 bg-white">
                            <i class='bx bx-search text-gray-500 mr-2'></i>
                            <input type="text" placeholder="Pesquisar documentos..." class="bg-transparent border-none w-full focus:outline-none text-gray-700 placeholder-gray-400">
                        </div>
                    </div>
                    
                    <!-- Notification and Help -->
                    <div class="flex items-center space-x-4">
                        <button class="text-white hover:text-gray-200">
                            <i class='bx bx-bell text-xl'></i>
                        </button>
                        <button class="text-white hover:text-gray-200">
                            <i class='bx bx-help-circle text-xl'></i>
                        </button>
                    </div>
                </div>
            </header>
            
            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="main-content p-6">
                    <!-- Welcome Banner -->
                    <div class="bg-sicoob-green text-white rounded-lg p-4 mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-semibold">Bem-vindo ao GED Sicoob</h2>
                            <p class="text-sm opacity-90">Gerencie seus documentos de forma segura e eficiente</p>
                        </div>
                        <i class='bx bx-file text-3xl opacity-80'></i>
                    </div>
                    
                    <!-- Section Title -->
                    <div class="mb-6 flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-sicoob-green flex items-center">
                            <i class='bx bx-time-five mr-2'></i> DOCUMENTOS RECENTES
                        </h2>
                        <button class="text-sm text-sicoob-green hover:underline">Ver todos</button>
                    </div>
                    
                    <!-- Documents List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Document Exemple1 -->
                        <div class="document-card rounded-lg p-4">
                            <div class="flex items-start mb-3">
                                <div class="bg-blue-100 text-blue-600 p-2 rounded mr-3">
                                    <i class='bx bx-file'></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Exemplo.txt</h3>
                                    <p class="text-xs text-gray-500">Atualizado 2 dias atrás</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center border-t border-gray-100 pt-3">
                                <span class="text-xs text-gray-500">2.4 MB</span>
                                <div class="flex space-x-2">
                                    <button class="action-button text-gray-500 hover:text-sicoob-green">
                                        <i class='bx bx-download'></i>
                                    </button>
                                    <button class="action-button text-gray-500 hover:text-sicoob-green">
                                        <i class='bx bx-share-alt'></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Attribution Areas Section -->
                    <div class="mt-8">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-sicoob-green flex items-center">
                                <i class='bx bx-upload mr-2'></i> CARREGAR NOVOS DOCUMENTOS
                            </h2>
                            <button class="text-sm text-sicoob-green hover:underline">Histórico de uploads</button>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 mb-6 border border-gray-200">
                            <div class="flex items-center mb-3">
                                <div class="bg-sicoob-green text-white p-2 rounded mr-2">
                                    <i class='bx bx-folder'></i>
                                </div>
                                <h3 class="font-medium">Selecione os arquivos</h3>
                            </div>
                            
                            <!-- Drag Area -->
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-sicoob-green transition-colors">
                                <i class='bx bx-cloud-upload text-4xl text-sicoob-green mb-2'></i>
                                <p class="text-gray-600 mb-1">Arraste e solte arquivos aqui</p>
                                <p class="text-xs text-gray-500 mb-4">Ou</p>
                                <button class="create-button py-2 px-6 rounded-md text-sm">
                                    Selecionar Arquivos
                                </button>
                                <p class="text-xs text-gray-500 mt-3">Formatos suportados: PDF, DOCX, XLSX, PNG, JPG</p>
                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>