<footer>
    <div class="main-footer flex-center">
        <h4>Social</h4>
        <div class="socials">
            <ul>
                @foreach ($socials as $social)
                    <li class="m-r-20"><a href="#">{{$social}}</a></li>
                @endforeach
            </ul>    
        </div>
    </div>
</footer>