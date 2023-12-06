

<?php

function route(string $home_link, string $route_home, string $route_name)
{

    return '
        <section class="route">
        <div class="container">
            <div class="row">
                <div class="col d-flex">
                    <a class="route-home" href="/' . $home_link . '
                    ">
                    ' . $route_home . '
                    </a>
                    <img class="route-name" src="/static/image/icons/right-page-arrow.svg" />
                    <div class="route-name">
                    ' . $route_name . '
                    </div>
                </div>
            </div>
        </div>
    </section>
        ';
}


?>