<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos - GED System Sicoob Cruz Alta</title>
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
        
        .folder-card {
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
            background-color: #ffffff;
            cursor: pointer;
        }
        
        .folder-card:hover {
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
        
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            animation: modalFadeIn 0.3s ease-out;
        }
        
        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .modal-option {
            display: flex;
            align-items: center;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 1px solid #e0e0e0;
        }
        
        .modal-option:hover {
            background-color: rgba(0, 126, 58, 0.05);
            border-color: #007e3a;
            transform: translateY(-2px);
        }
        
        .modal-option i {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: #007e3a;
        }
        
        .close-modal {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }
        
        .close-modal:hover {
            color: #333;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            font-size: 0.875rem;
            color: #666;
        }
        
        .breadcrumb a {
            color: #007e3a;
            text-decoration: none;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
        .breadcrumb-separator {
            margin: 0 0.5rem;
            color: #999;
        }
        
        /* Table styles */
        .file-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .file-table th {
            text-align: left;
            padding: 12px 16px;
            background-color: #f8f8f8;
            color: #007e3a;
            font-weight: 600;
            border-bottom: 2px solid #e0e0e0;
        }
        
        .file-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: middle;
        }
        
        .file-table tr:hover td {
            background-color: rgba(0, 126, 58, 0.05);
        }
        
        .file-icon {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            margin-right: 12px;
        }
        
        .file-icon.pdf {
            background-color: #fee2e2;
            color: #dc2626;
        }
        
        .file-icon.doc {
            background-color: #dbeafe;
            color: #2563eb;
        }
        
        .file-icon.xls {
            background-color: #dcfce7;
            color: #16a34a;
        }
        
        .file-icon.img {
            background-color: #fef3c7;
            color: #d97706;
        }
        
        .file-icon.other {
            background-color: #e9d5ff;
            color: #9333ea;
        }
        
        .file-name {
            display: flex;
            align-items: center;
        }
        
        .file-actions {
            display: flex;
            gap: 8px;
        }
        
        .file-actions button {
            background: none;
            border: none;
            cursor: pointer;
            color: #666;
            transition: all 0.2s;
        }
        
        .file-actions button:hover {
            color: #007e3a;
        }
        
        .file-actions .delete:hover {
            color: #dc2626;
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
                <button id="openModalBtn" class="create-button w-full flex items-center justify-center text-white rounded-md py-2 px-4 font-medium">
                    <i class='bx bx-plus mr-2'></i> Criar ou Carregar
                </button>
            </div>
            
            <!-- Menu Items -->
            <nav class="flex-1 overflow-y-auto">
                <ul class="px-2">
                    <li class="mb-1">
                        <a href="ged" class="sidebar-item flex items-center px-4 py-3 text-gray-600 rounded-md">
                            <i class='bx bx-home-alt text-xl mr-3'></i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item active flex items-center px-4 py-3 rounded-md">
                            <i class='bx bx-folder text-xl mr-3'></i>
                            <span>ARQUIVOS</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center px-4 py-3 text-gray-600 rounded-md">
                            <i class='bx bx-user text-xl mr-3'></i>
                            <span>ACESSOS</span>
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
                    <h1 class="text-xl font-semibold text-white">SISTEMA GED - Arquivos</h1>
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
                    <!-- Breadcrumb -->
                    <div class="breadcrumb mb-6">
                        <a href="#">Home</a>
                        <span class="breadcrumb-separator">/</span>
                        <span>Arquivos</span>
                    </div>
                    
                    <!-- Section Title -->
                    <div class="mb-6 flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-sicoob-green flex items-center">
                            <i class='bx bx-folder mr-2'></i> PASTAS
                        </h2>
                        <button class="text-sm text-sicoob-green hover:underline">Criar nova pasta</button>
                    </div>
                    
                    <!-- Folders List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                        <!-- Folder Example 1 -->
                        <div class="folder-card rounded-lg p-4">
                            <div class="flex flex-col items-center text-center">
                                <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-3">
                                    <i class='bx bx-folder text-2xl'></i>
                                </div>
                                <h3 class="font-medium">Financeiro</h3>
                                <p class="text-xs text-gray-500">12 itens</p>
                            </div>
                        </div>
                        
                        <!-- Folder Example 2 -->
                        <div class="folder-card rounded-lg p-4">
                            <div class="flex flex-col items-center text-center">
                                <div class="bg-green-100 text-green-600 p-4 rounded-full mb-3">
                                    <i class='bx bx-folder text-2xl'></i>
                                </div>
                                <h3 class="font-medium">RH</h3>
                                <p class="text-xs text-gray-500">8 itens</p>
                            </div>
                        </div>
                        
                        <!-- Folder Example 3 -->
                        <div class="folder-card rounded-lg p-4">
                            <div class="flex flex-col items-center text-center">
                                <div class="bg-yellow-100 text-yellow-600 p-4 rounded-full mb-3">
                                    <i class='bx bx-folder text-2xl'></i>
                                </div>
                                <h3 class="font-medium">Contratos</h3>
                                <p class="text-xs text-gray-500">23 itens</p>
                            </div>
                        </div>
                        
                        <!-- Folder Example 4 -->
                        <div class="folder-card rounded-lg p-4">
                            <div class="flex flex-col items-center text-center">
                                <div class="bg-purple-100 text-purple-600 p-4 rounded-full mb-3">
                                    <i class='bx bx-folder text-2xl'></i>
                                </div>
                                <h3 class="font-medium">Reuniões</h3>
                                <p class="text-xs text-gray-500">5 itens</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section Title -->
                    <div class="mb-6 flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-sicoob-green flex items-center">
                            <i class='bx bx-file mr-2'></i> DOCUMENTOS
                        </h2>
                        <div class="flex items-center space-x-2">
                            <select class="text-sm border border-gray-300 rounded px-2 py-1 focus:outline-none focus:border-sicoob-green">
                                <option>Ordenar por</option>
                                <option>Nome</option>
                                <option>Data</option>
                                <option>Tamanho</option>
                            </select>
                            <button class="text-sm text-sicoob-green hover:underline">Filtrar</button>
                        </div>
                    </div>
                    
                    <!-- Documents Table -->
                    <div class="overflow-x-auto">
                        <table class="file-table w-full">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                    <th>Descrição</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Document 1 -->
                                <tr>
                                    <td>
                                        <div class="file-name">
                                            <div class="file-icon pdf">
                                                <i class='bx bxs-file-pdf'></i>
                                            </div>
                                            <div>
                                                <div class="font-medium">Relatório Anual 2023</div>
                                                <div class="text-xs text-gray-500">4.7 MB</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>PDF</td>
                                    <td>Relatório financeiro anual da cooperativa</td>
                                    <td>15/05/2023</td>
                                    <td>
                                        <div class="file-actions">
                                            <button title="Download"><i class='bx bx-download'></i></button>
                                            <button title="Compartilhar"><i class='bx bx-share-alt'></i></button>
                                            <button title="Excluir" class="delete"><i class='bx bx-trash'></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Document 2 -->
                                <tr>
                                    <td>
                                        <div class="file-name">
                                            <div class="file-icon doc">
                                                <i class='bx bxs-file-doc'></i>
                                            </div>
                                            <div>
                                                <div class="font-medium">Contrato Cliente</div>
                                                <div class="text-xs text-gray-500">1.2 MB</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>DOCX</td>
                                    <td>Modelo de contrato padrão para clientes</td>
                                    <td>10/05/2023</td>
                                    <td>
                                        <div class="file-actions">
                                            <button title="Download"><i class='bx bx-download'></i></button>
                                            <button title="Compartilhar"><i class='bx bx-share-alt'></i></button>
                                            <button title="Excluir" class="delete"><i class='bx bx-trash'></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Document 3 -->
                                <tr>
                                    <td>
                                        <div class="file-name">
                                            <div class="file-icon xls">
                                                <i class='bx bxs-file-xlsx'></i>
                                            </div>
                                            <div>
                                                <div class="font-medium">Planilha Custos</div>
                                                <div class="text-xs text-gray-500">3.5 MB</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>XLSX</td>
                                    <td>Planilha de custos operacionais mensais</td>
                                    <td>05/05/2023</td>
                                    <td>
                                        <div class="file-actions">
                                            <button title="Download"><i class='bx bx-download'></i></button>
                                            <button title="Compartilhar"><i class='bx bx-share-alt'></i></button>
                                            <button title="Excluir" class="delete"><i class='bx bx-trash'></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Document 4 -->
                                <tr>
                                    <td>
                                        <div class="file-name">
                                            <div class="file-icon img">
                                                <i class='bx bxs-file-image'></i>
                                            </div>
                                            <div>
                                                <div class="font-medium">Assinatura Digital</div>
                                                <div class="text-xs text-gray-500">0.8 MB</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>PNG</td>
                                    <td>Imagem da assinatura digital do presidente</td>
                                    <td>01/05/2023</td>
                                    <td>
                                        <div class="file-actions">
                                            <button title="Download"><i class='bx bx-download'></i></button>
                                            <button title="Compartilhar"><i class='bx bx-share-alt'></i></button>
                                            <button title="Excluir" class="delete"><i class='bx bx-trash'></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Document 5 -->
                                <tr>
                                    <td>
                                        <div class="file-name">
                                            <div class="file-icon pdf">
                                                <i class='bx bxs-file-pdf'></i>
                                            </div>
                                            <div>
                                                <div class="font-medium">Manual de Procedimentos</div>
                                                <div class="text-xs text-gray-500">7.2 MB</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>PDF</td>
                                    <td>Manual de procedimentos internos atualizado</td>
                                    <td>28/04/2023</td>
                                    <td>
                                        <div class="file-actions">
                                            <button title="Download"><i class='bx bx-download'></i></button>
                                            <button title="Compartilhar"><i class='bx bx-share-alt'></i></button>
                                            <button title="Excluir" class="delete"><i class='bx bx-trash'></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Document 6 -->
                                <tr>
                                    <td>
                                        <div class="file-name">
                                            <div class="file-icon doc">
                                                <i class='bx bxs-file-doc'></i>
                                            </div>
                                            <div>
                                                <div class="font-medium">Política de Segurança</div>
                                                <div class="text-xs text-gray-500">2.1 MB</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>DOCX</td>
                                    <td>Política de segurança da informação</td>
                                    <td>25/04/2023</td>
                                    <td>
                                        <div class="file-actions">
                                            <button title="Download"><i class='bx bx-download'></i></button>
                                            <button title="Compartilhar"><i class='bx bx-share-alt'></i></button>
                                            <button title="Excluir" class="delete"><i class='bx bx-trash'></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="flex justify-center mt-8">
                        <nav class="flex items-center space-x-2">
                            <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                                <i class='bx bx-chevron-left'></i>
                            </button>
                            <button class="px-3 py-1 rounded bg-sicoob-green text-white">1</button>
                            <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">2</button>
                            <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">3</button>
                            <span class="px-2 text-gray-500">...</span>
                            <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">8</button>
                            <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-100">
                                <i class='bx bx-chevron-right'></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <!-- Modal -->
    <div id="createModal" class="modal hidden">
        <div class="modal-content relative">
            <span class="close-modal" id="closeModalBtn">&times;</span>
            <h2 class="text-xl font-semibold text-sicoob-green mb-6">O que você deseja fazer?</h2>
            
            <div class="modal-option" id="createFolderOption">
                <i class='bx bx-folder-plus'></i>
                <div>
                    <h3 class="font-medium">Criar nova pasta</h3>
                    <p class="text-xs text-gray-500">Organize seus documentos em pastas</p>
                </div>
            </div>
            
            <div class="modal-option" id="uploadFileOption">
                <i class='bx bx-upload'></i>
                <div>
                    <h3 class="font-medium">Enviar arquivo</h3>
                    <p class="text-xs text-gray-500">Carregue documentos para o sistema</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById('createModal');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const createFolderOption = document.getElementById('createFolderOption');
        const uploadFileOption = document.getElementById('uploadFileOption');
        
        // Open modal
        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
        
        // Close modal
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
        
        // Close modal when clicking outside
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
        
        // Folder click functionality
        document.querySelectorAll('.folder-card').forEach(folder => {
            folder.addEventListener('click', () => {
                // Here you would typically navigate to the folder or show its contents
                alert('Navegando para a pasta: ' + folder.querySelector('h3').textContent);
            });
        });
    </script>
</body>
</html>