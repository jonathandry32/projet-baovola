<div class="p-1">
    <h2 class="mb-3">Finance</h2>
    <div class="card">
        <div class="row">
            <div class="col-10 mb-2 d-flex align-items-center">
                <h4 class="me-4">Mouvement financier</h4>
            </div>

        </div>
        <div style="margin-bottom: 20px; background:transparent;">
            <input type="text" id="filter0" onkeyup="filterDate()" placeholder="Filtrer par date">
            <input type="text" id="filter3" onkeyup="filterType()" placeholder="Filtrer par libellé">
        </div>

            <table class="table table-borderless" id="filter">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Date</th>
                        <th scope="col">Entrée</th>
                        <th scope="col">Sortie</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Solde</th>
                    </tr>
                </thead>
                <div class="line"></div>
                <tbody>
                    <?php 
                        $mouvement = array();
                        foreach ($mouvement as $m) { ?>
                            <tr class="text-center">
                                <td><b style="background:transparent;"><?php echo $m['date']; ?></b></td>
                                <td><?php echo $m['entree']; ?></td>
                                <td><?php echo $m['sortie']; ?></td>
                                <td><?php echo $m['libelle']; ?></td>
                                <td><b><?php echo $m['solde']; ?></b></td>
                            </tr>
                        <?php }
                    ?>                    
                </tbody>
            </table>
            <?php if(count($mouvement) == 0){ ?>
                    <b class="text-center">Vide</b>
            <?php } ?>

            <table class="table table-borderless" id="filter">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Résultat</th>
                        <th scope="col">+/- 0 </th>
                    </tr>
                </thead>
            </table>

        </div>
</div>
<script src="<?php echo base_url('assets/js/filtrage.js'); ?>"></script>
