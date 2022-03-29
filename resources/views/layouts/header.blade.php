<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('main_page')}}" class="nav-link px-2 link-dark">Новости</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Каталог вакансий</a></li>
                @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                    <li><a href="{{route('add_news')}}" class="nav-link px-2 link-dark">Добавить новость</a></li>
                @endif
            </ul>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://hornews.com/upload/images/blank-avatar.jpg" alt="no avatar" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="{{route('profile')}}">Личный кабинет</a></li>
                    <li><a class="dropdown-item" href="#">Избранные вакансии</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="logout()">Выйти</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{--todo: https://getbootstrap.com/docs/4.0/components/modal/      modal window--}}
<script>
    function logout(){
        let data = {
            _token: "{{csrf_token()}}"
        }
        $.post('/logout', data, function(res){
            window.location.reload();
        });
    }
</script>
