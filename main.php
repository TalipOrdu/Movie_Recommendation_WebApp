<?php

session_start();
if(isset($_SESSION["username"])){
    echo "<h3>Welcome ".$_SESSION["username"]."</h3>";
    // header("location:new.html");
}
else{
    echo "yetkiniz yoktur.";
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
	integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <header class="header trans_300">

    <!-- Main Navigation -->
        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="logo_container">
                            <a href="index.html" style="text-decoration:none;">World Of <span>Movies</span></a>
                        </div>
                        <nav class="navbar">
                            <ul class="navbar_menu">
                                <li><a href="survey.php">Movie Recommender</a> </li>
                                
                                <li><a href="contact.html">contact</a> </li>
                            </ul>
                            <form id="form" style="padding-left: 40px;">
                                <input type="text" name="" id="search" placeholder="search" class="search">
                            </form>
                            <a href="logout.php" id="logout" class="logout">Log Out</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main id="main">
        <h1>main</h1>
        <p style="padding: 20px 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam libero harum, nihil, facilis mollitia totam quos itaque doloremque incidunt consequatur eius recusandae quae vitae deleniti tenetur fugit aspernatur aliquam ab?
        Similique libero excepturi pariatur asperiores officia facilis natus mollitia perferendis corrupti! Ut facilis nam similique nesciunt cupiditate et a eius. Rerum hic dolore incidunt ullam laudantium consectetur quidem harum distinctio.
        Dolorum explicabo, doloremque beatae sint repellat consequatur recusandae qui vero voluptatibus laboriosam? Placeat similique qui impedit, atque, molestiae delectus incidunt debitis tenetur quos magni, cum laudantium animi natus non reiciendis.
        A minus provident aut nemo eveniet nisi molestiae, sunt illum accusamus ad! Nobis, praesentium! Consectetur explicabo corrupti, eum id rerum mollitia autem voluptates repellat aspernatur atque nobis vitae vero ipsam.
        Pariatur non numquam cum excepturi est vero, itaque nam tempora, praesentium inventore magni accusantium sint quidem totam voluptates! Excepturi at corporis libero accusantium iusto tenetur esse in omnis voluptatibus expedita.
        In aspernatur fugit ullam consequuntur quod, rerum aliquid corporis non cupiditate laborum tempore repellendus facilis, suscipit ipsam error velit incidunt optio iusto voluptatibus deleniti voluptas ab quaerat exercitationem. Dolorem, dolor.
        Culpa, est quibusdam, quisquam nulla alias magnam fuga sequi dicta voluptatibus quo voluptas nemo assumenda obcaecati, doloribus libero excepturi voluptatum voluptate reiciendis cupiditate suscipit temporibus. Consequuntur aperiam natus facere asperiores!
        Sapiente facere, eos sequi, harum quod saepe debitis suscipit, repudiandae aliquam voluptas quo mollitia quos? Ullam eveniet dolorem animi cupiditate, in tempore iste. Itaque harum eos dolores commodi illum! Hic?
        Dolore quod quia voluptatibus, voluptate in animi esse id illum officiis. Voluptate est sit vel officia ab, eum, ad repellendus amet eius soluta aperiam! Ipsa quae veniam possimus magnam? Temporibus?
        Molestias dolorum maxime at, eum sed qui cum illo voluptatum in itaque ullam provident veniam harum expedita nobis. Autem fugiat repellat mollitia cum accusantium quas voluptatum. Magni culpa ab quidem.
        Magnam dolores voluptatem, hic doloremque quae neque ut libero nam veritatis commodi vel, distinctio in. Consequuntur earum eveniet voluptatem sed dicta delectus blanditiis reprehenderit et, ut eius nam optio obcaecati.
        Nam temporibus optio officiis at? Sapiente, quia molestiae repellendus, aut dolores odit exercitationem, iste ab nesciunt harum nulla cumque necessitatibus? Nisi ratione sit mollitia fuga architecto adipisci exercitationem praesentium ea?
        Aperiam laborum hic ab, eum asperiores assumenda tempore eos dolor nesciunt iste modi doloribus, dolorem officia quos expedita cum eaque eligendi saepe non iusto temporibus! Deleniti fugit blanditiis quos fugiat?
        Repellendus, illo voluptatum assumenda cupiditate ratione error quam mollitia atque est fuga eveniet similique soluta beatae quasi magni pariatur facilis id blanditiis nobis nihil praesentium? Illum laudantium optio harum sapiente.
        Reiciendis necessitatibus veniam incidunt sapiente nisi animi corporis, facilis quae perspiciatis molestias accusamus deserunt quidem fuga iusto voluptas id. Perferendis nesciunt sed delectus praesentium repellendus enim nihil fugiat ratione itaque?
        Vero iste sunt optio aliquam quidem officiis recusandae ipsum quod fugit earum, ab soluta consequuntur, tempore unde aut nam eligendi velit omnis? Accusamus animi voluptatum blanditiis cum dolor, odio qui?
        Dignissimos, earum repudiandae officiis alias debitis culpa doloremque esse expedita pariatur delectus eius velit modi accusamus odio perspiciatis, voluptatum consequatur quam, in veritatis ducimus magnam iure illum vitae aliquam. Ex!
        Repellendus sunt laudantium nam harum deleniti blanditiis quia rem quos fuga id quasi impedit, nostrum necessitatibus vero consectetur dolores? Impedit dolor, nam maiores corporis reprehenderit tempora voluptatem dolorum deleniti repellendus.
        Et nobis ratione dolor veritatis adipisci quae, rerum assumenda repudiandae, aperiam veniam magni mollitia dolores illum quia nostrum voluptas esse eius dolorum molestias fuga tenetur numquam itaque. Delectus, inventore unde?
        Dolores necessitatibus possimus nemo assumenda, cupiditate unde, pariatur, at aperiam laboriosam id quia dolor beatae suscipit eos molestiae. Reprehenderit pariatur deleniti excepturi facilis mollitia impedit! Maxime laborum earum illum temporibus?
        Beatae labore voluptatibus corrupti, sit quam eos sunt asperiores vero totam placeat sapiente provident est ex iure fugiat ab rem illum, aliquam laborum numquam eum quidem. Nam odio dolorum ad.
        Esse ullam earum voluptatem quasi, sunt delectus ad! Temporibus animi tempore, tempora eum fuga accusamus consequuntur, aliquam id suscipit dolor omnis sunt atque velit perspiciatis dicta illum nobis? Eaque, exercitationem?
        Distinctio ad animi tempora id nesciunt impedit ut nulla eligendi unde sapiente autem, quia aperiam sunt accusamus optio ducimus iusto eius exercitationem velit minima perferendis vero est? Eius, doloribus enim.
        Quisquam quidem consectetur nobis iure obcaecati! Cum officiis, non rerum quo doloremque quibusdam totam quos accusamus accusantium! Facere amet libero perferendis vel, excepturi delectus cupiditate facilis a suscipit totam vitae?
        Culpa soluta voluptatum fugiat, dicta ab est dignissimos ipsam debitis facilis suscipit deleniti magni, nam velit sint nemo. Similique omnis, sint aliquam esse rerum cupiditate. Assumenda voluptatum quae accusantium quos!
        Soluta quidem libero dolor corrupti minima ab, voluptatum, tenetur, perferendis fugit sint laborum inventore. Velit molestias commodi nihil tempora voluptate explicabo hic dicta libero ad, ea quam magni deleniti dolore.
        Recusandae consectetur, repudiandae a ipsum vitae assumenda vero reiciendis sit nisi, ducimus architecto tempora suscipit voluptas adipisci dolorem officia error tenetur ipsam. Laborum esse, officiis culpa qui aspernatur hic. Adipisci?
        In officia harum quibusdam, porro dignissimos consectetur deleniti enim asperiores possimus pariatur dolores quae inventore alias a voluptates vitae at, fugit neque. Quasi quis quam iure, sunt omnis animi saepe.
        Eveniet necessitatibus voluptas unde quisquam tenetur deserunt praesentium. Laborum temporibus voluptate dolorem voluptatum sapiente quasi, reiciendis architecto a fugit eveniet fuga nesciunt et placeat sint quibusdam optio aliquam accusamus amet?
        Dolorem natus voluptas voluptate libero mollitia consectetur. Ex doloribus, quam quod maxime quidem obcaecati reiciendis nam possimus a illum commodi sapiente blanditiis enim expedita voluptate veniam ea explicabo doloremque unde!
        Possimus aliquam, dignissimos architecto, eaque ratione dolorem velit accusantium consequuntur, inventore ipsum id tempora odit. Fugit excepturi temporibus ea cum magni, animi ab nisi vitae porro harum, cumque sequi reprehenderit.
        Veniam quibusdam, itaque, sapiente perspiciatis repudiandae illo animi eius amet doloremque soluta officiis ipsam atque, tenetur velit nobis totam vitae iusto quaerat necessitatibus repellendus doloribus a possimus id. Ex, eos!
        Doloribus cum reprehenderit doloremque tempore id expedita commodi quae autem ipsa eaque voluptatum, eligendi sequi rem vel dicta ut sapiente corrupti laborum odio! Omnis sapiente accusamus quaerat asperiores quidem aut.
        Ratione asperiores facilis ex dicta modi minus cumque aspernatur beatae obcaecati maxime placeat cupiditate assumenda vitae doloremque eius, temporibus tenetur unde exercitationem dolorum, consectetur doloribus sunt blanditiis. Ipsum, eos aliquid.
        Delectus quam excepturi qui hic porro officia? Nihil minima vel, unde cupiditate pariatur, omnis ratione ipsum ullam placeat perspiciatis odit iure! Commodi doloribus eligendi vero laborum harum obcaecati maxime similique?
        Exercitationem nostrum, rem voluptates temporibus magni corporis modi et iusto. Officia recusandae voluptatem ipsam odio magni harum ratione perspiciatis suscipit, illo quas veritatis eius ad maiores provident placeat eaque a!
        Provident rem autem quisquam perspiciatis nihil, reiciendis non qui nobis hic? Nobis quo architecto animi. Aut eaque amet earum? Vitae rem maiores nemo sed quis repellat ad quo aperiam ex.
        Vero atque quia hic inventore, commodi ea repellat aspernatur esse ratione natus fugit quis nobis ipsum? Nihil iste quod beatae ea eius, dolores mollitia enim sit reprehenderit, id harum ducimus.
        Perspiciatis nostrum quasi reiciendis ratione id nesciunt dolor quisquam, fugit optio pariatur numquam nulla dolores incidunt iste ad modi, consequatur et laboriosam at eos accusamus velit. Adipisci voluptates inventore soluta.
        Accusamus tempore ratione eveniet cupiditate praesentium aperiam corrupti fugit molestiae, saepe delectus rem nam neque! Excepturi quasi iusto omnis, reprehenderit maiores deleniti provident magni explicabo aperiam placeat quidem maxime libero.
        Voluptatibus nemo excepturi animi repellendus optio praesentium voluptatum sit ducimus officiis unde amet odio corrupti pariatur, rerum quia adipisci incidunt doloribus sed voluptas laborum a! Libero debitis ratione odio mollitia.
        Voluptas, assumenda optio architecto consectetur incidunt sequi vel amet odio nesciunt omnis dicta earum et sapiente expedita. Quisquam eligendi, adipisci ipsa iusto, vero consequuntur laudantium, veniam inventore rem sunt quod!
        Iusto, enim dignissimos? Commodi sapiente ullam delectus? Perferendis, repellendus vitae iste in possimus, nostrum deleniti, doloribus delectus eaque ea est consequuntur mollitia quisquam. Praesentium nostrum sint quas voluptatibus iure tempora.
        Nihil, magni dicta laudantium minus placeat, repellat consequatur ut, voluptatem accusamus numquam libero. Error ex repudiandae, enim repellat impedit eum deleniti beatae ducimus iusto quisquam voluptatum ipsum illum consectetur assumenda.
        Neque eaque consequuntur sapiente consectetur iste deleniti error minus eligendi voluptates amet tempore qui sint totam, possimus laudantium reprehenderit quas reiciendis. Consequuntur esse saepe voluptatum aspernatur ut fugit sed dolores.
        Omnis rerum eaque labore sequi dolore autem maiores earum beatae! Laborum, quas numquam voluptatem laboriosam porro dolorem in officia corporis, dicta earum similique mollitia inventore enim? Suscipit consequatur qui expedita!
        Dolore quo vero alias illum quis, doloremque magnam laudantium aspernatur hic, quisquam nemo quidem accusantium nihil, provident repudiandae rerum ad corporis eos dolores perspiciatis modi maxime quod? Officia, accusantium quos!
        Reprehenderit quam deleniti, odio vel necessitatibus atque velit, dolorum aperiam beatae numquam rerum quae voluptatem rem officiis in est alias totam? Neque nulla eaque, aliquam delectus temporibus et ea eligendi?
        Omnis distinctio voluptate cum voluptates asperiores ea eaque enim corrupti optio, sint quidem ratione dignissimos vitae minus quibusdam. Quasi totam minima consequuntur excepturi ipsam ratione ut dolores, deserunt omnis cupiditate?
        Vitae alias tenetur eos officia placeat blanditiis suscipit ab excepturi laudantium dolorem, debitis hic magni at qui corporis necessitatibus. Maxime, accusantium? Veritatis cum itaque hic maiores! Quam aliquid voluptas fugit.</p>    
    </main>
    <button onclick="topFunction()" id="gotopBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"> ^ </i></button>
    
    <script type="text/javascript" src="app.js"></script>
    
    <!-- Bootstrap JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
	integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</body>
</html>