<?php include('view/layout/head.inc.php'); ?> 

<?php include('view/layout/nav.inc.php'); ?> 

<?php include('view/layout/sideNav.inc.php'); ?> 

<?php include('view/layout/tables-links.inc.php'); ?> 


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>nom de l'auteur</th>
                                            <th>titre de l'article</th>
                                            <th>commentaire</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>nom de l'auteur</th>
                                            <th>titre de l'article</th>
                                            <th>commentaire</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($data as $onedata){ ?>
                                        <tr>
                                            <td><?= $onedata["display_name"] ?></td>
                                            <td><?= $onedata["post_title"] ?></td>
                                            <td><?= $onedata["comment_content"] ?></td>
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