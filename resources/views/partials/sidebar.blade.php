<nav class="hidden position-fixed d-flex flex-column justify-content-between p-3" id="sidebar">
    <div id="toggleNav" class="justify-content-center align-items-center">
        <i class="fas fa-lg fa-bars"></i>
    </div>
    <div id="navTop">
        <a href="#">
            <div class="d-flex justify-content-center align-items-center flex-wrap border-bottom pb-5">
                <i class="far fa-money-bill-alt fa-3x" id="logoIcon"></i>
                <span class="ml-2" id="logotype">BitChest</span>
            </div>
        </a>
        <ul class="my-5 p-0">
            <a href="{{ route('currencies.index') }}">
                <li class="sidebar-item d-flex align-items-center mb-2 active">
                    <i class="fab fa-lg fa-bitcoin"></i>
                    <span class="text-capitalize ml-2">Les cryptomonnaies</span>
                </li>
            </a>
            <a href="{{ route('wallet', Auth::id()) }}">
                <li class="sidebar-item d-flex align-items-center mb-2">
                    <i class="fas fa-lg fa-wallet"></i>
                    <span class="text-capitalize ml-2">Mon portefeuille</span>
                </li>
            </a>
            <a href="#">
                <li class="sidebar-item d-flex align-items-center mb-2">
                    <i class="fas fa-lg fa-user-circle"></i>
                    <span class="text-capitalize ml-2">Mon compte</span>
                </li>
            </a>
        </ul>
        <div>
            <span class="text-capitalize">Mon solde : </span>
            <span id="balance">1227,48 €</span>
        </div>
    </div>
    <div id="navBottom" class="d-flex justify-content-between">
        <a href="#" class="flex-grow-1">
            <div class="sidebar-item d-flex align-items-center">
                <i class="fas fa-lg fa-sign-out-alt"></i>
                <span class="text-capitalize ml-2">Déconnexion</span>
            </div>
        </a>
        <div class="sidebar-item align-items-center justify-content-end flex-grow-1" id="closeNav">
            <i class="fas fa-lg fa-times-circle"></i>
            <span class="text-capitalize ml-2">Fermer</span>
        </div>
    </div>
</nav>