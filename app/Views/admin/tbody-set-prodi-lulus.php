<?php
$no = 1;
foreach ($setprodilulus as $cmball) :
?>
    <tr>
        <td class="text-center"><?= $no ?></td>
        <td><?= strtoupper($cmball['nama']) ?></td>
        <td><?= $cmball['nomorpeserta'] ?></td>
        <td><?= $cmball['tanggallahir'] ?></td>
        <td><?= $cmball['jeniskuliah'] ?></td>
        <td>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="prodi-lulus-<?= $no ?>">
                <option value="">Silahkan Pilih</option>
                <option <?php if ($cmball['prodilulus'] == 'Tidak Lulus') echo 'selected="selected"' ?>> Tidak Lulus</option>

                <option <?php if ($cmball['prodilulus'] == $cmball['prodi1']) echo 'selected="selected"' ?>> <?= $cmball['prodi1'] ?></option>

                <option <?php if ($cmball['prodilulus'] == $cmball['prodi2']) echo 'selected="selected"' ?>> <?= $cmball['prodi2'] ?></option>

                <input type="hidden" name="id-<?= $no ?>" value="<?= $cmball["id"]; ?>">
            </select>
        </td>
    </tr>
<?php
    $no++;
endforeach;
?>