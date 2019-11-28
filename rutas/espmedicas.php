<?php
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="listaMedica" class="container">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                    </div>
                </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quis a pariatur consectetur aliquam? Earum sequi fuga nemo maiores, aut eum, qui laboriosam facilis enim amet vel ratione perspiciatis tempore sed quia aspernatur? Saepe est fuga maxime officia molestias suscipit voluptas reprehenderit. Maiores veritatis minima aperiam consequatur cumque, atque eum.</div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium libero facere ad hic rem! Veniam ipsa numquam, et autem laboriosam, deleniti adipisci dolores cumque eaque dicta magni, rem at ducimus?</div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas saepe consectetur, accusamus deserunt minima vitae quod reiciendis et voluptates possimus. Officia vel tempora ullam molestiae fugit consequatur, obcaecati, quibusdam itaque quo sit repudiandae eligendi deserunt ab delectus eum, optio eius.</div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi modi repudiandae beatae error aspernatur repellat pariatur voluptatum, est quaerat temporibus consequatur quos. Error consectetur aliquid distinctio tempora ut quia neque ipsa non ad, aut vero dicta ex totam fugiat quisquam id debitis? Temporibus saepe quidem aut ut rerum. Assumenda magni placeat soluta nam delectus nesciunt esse reprehenderit mollitia quia? Ullam?</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
require_once('footer.php');
?>