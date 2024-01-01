<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                   
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-book-open-reader"></i>
                    <span class="nav-text">Alumnos</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('alumnos.index')}}">Lista</a></li>
                    <li><a href="{{ route('alumnos.importar')}}">Importar</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-chalkboard-user"></i>
                    <span class="nav-text">Maestros</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('profesores.index')}}">Lista</a></li>
                    <li><a href="{{ route('profesores.create')}}">Crear</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-basketball"></i>
                    <span class="nav-text">Talleres</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('talleres.index')}}">Lista</a></li>
                    <li><a href="{{ route('talleres.create')}}">Crear</a></li>
                </ul>
            </li>
            
        </ul>
        <div class="copyright">
            <p><strong>Preparatoria Número Seis de Tlaltizapan</strong> © 2023 All Rights Reserved</p>
        </div>
    </div>
</div>