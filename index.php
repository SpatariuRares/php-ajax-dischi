<?php 
    require __DIR__ . '/database.php';
    require __DIR__ . '/header.php';
?>
<main>
    <div class="discs">
        <?php 
            foreach ($dischi as $disco){
        ?>
            <div class="disco">
                <div>
                    <img src=<?php 
                        echo $disco['poster'];
                    ?> alt="disco">
                </div>
                <div>
                    <h3><?php echo $disco['title'];?></h3>
                    <p><?php echo $disco['author'];?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</main>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    main{
        height:calc(100% - 70px);
        background-color: #1e2d3b;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .discs{
        display:flex;
        flex-wrap: wrap;
        width:70%;
    }
    .disco{
        width: calc(100% / 5);
        padding: 10px;
    }
    .disco img{
        width:100%;
        height: 80%;
        object-fit: cover;
    }
</style>