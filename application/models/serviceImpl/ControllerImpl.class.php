<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AllControllers
 *
 * @author amen
 */
class ControllerImpl {

    function __construct() {
        
    }

    /**
     * construit et affiche un tableau de données avec des checkbox et des boutonradio
     * @param array $header l'entête du tableau
     * @param data $data les données ou valeurs à afficher dans le tableau
     */
    public function check_radioTableView($header, $result) {
        ?>
        <table border="" cellSpacing="0">
            <thead>
                <tr>
                    <?php foreach ($header as $value) { ?>
                        <th class = "thead"><?php print_r($value) ?> </th> 
                        <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysql_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><input type="checkbox" name="choices[]" value="<?php print_r($data[0]) ?>" /></td>
                        <td><?php print_r($data[1]); ?></td>
                        <td><?php print_r($data[2]); ?></td>
                        <td>
                            <ul> 
                                <li><input  type="radio" name= "<?php print_r("statechoice_" . $data[0]); ?>" 
                                            value="<?php print_r($data[0]); ?>" <? if ($data[3] == 1) { ?> 
                                                checked="checked"<? } ?> />         
                                    <label>activé</label>
                                </li>
                                <li><input type="radio" name="<?php print_r("statechoice_" . $data[0]); ?>" 
                                           value="<?php print_r($data[0]); ?>" <? if ($data[3] == 2) { ?>
                                               checked="checked"<? } ?> /> 
                                    <label>désactivé</label>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
    }
    /**
     * construit et affiche un tableau de données avec des checkbox et des boutonradio
     * @param array $header l'entête du tableau
     * @param data $data les données ou valeurs à afficher dans le tableau
     */
    public function check_radioTableView2($header, $result) {
        ?>
        <table border="" cellSpacing="0">
            <thead>
                <tr>
                    <?php foreach ($header as $value) { ?>
                        <th class = "thead"><?php print_r($value) ?> </th> 
                        <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysql_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><input type="checkbox" name="choices[]" value="<?php print_r($data[0]) ?>" /></td>
                        <td><?php print_r($data[1]); ?></td>
                        <td><?php print_r($data[2]); ?></td>
                        <td><?php print_r($data[3]); ?></td>
                        <td>
                            <ul> 
                                <li><input  type="radio" name= "<?php print_r("statechoice_" . $data[0]); ?>" 
                                            value="<?php print_r($data[0]); ?>" <? if ($data[4] == 1) { ?> 
                                                checked="checked"<? } ?> />         
                                    <label>activé</label>
                                </li>
                                <li><input type="radio" name="<?php print_r("statechoice_" . $data[0]); ?>" 
                                           value="<?php print_r($data[0]); ?>" <? if ($data[4] == 2) { ?>
                                               checked="checked"<? } ?> /> 
                                    <label>désactivé</label>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
    }

    public function fillSelectedList($result, $name) {
        ?>
        <select name="<?php print_r($name); ?>">
            <?php
            while ($data = mysql_fetch_array($result)) {
                $item = "";
//                foreach ($data as $value) {
                    $item.= $data[0];
//                }
                ?> 
                <option><?php print_r($item); ?></option>
        <?php } ?>
        </select>
    <?php
    }

}
?>
