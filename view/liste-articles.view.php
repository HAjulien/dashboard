<?php include('view/layout/head.inc.php'); ?> 

<?php include('view/layout/nav.inc.php'); ?> 

<?php include('view/layout/sideNav.inc.php'); ?> 

<?php include('view/layout/tables-links.inc.php'); ?> 


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titre de l'article</th>
                                            <th>Nom de l'auteur</th>
                                            <th>Catégorie</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titre de l'article</th>
                                            <th>Nom de l'auteur</th>
                                            <th>Catégorie</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($data as $onedata){ ?>
                                        <tr>
                                            <td><?= $onedata["post_ID"] ?></td>
                                            <td><?= $onedata["post_title"] ?></td>
                                            <td><?= $onedata["display_name"] ?></td>
                                            <td><?= $onedata["cat_descr"] ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>






<?php include('view/layout/footer.inc.php'); ?> 

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>