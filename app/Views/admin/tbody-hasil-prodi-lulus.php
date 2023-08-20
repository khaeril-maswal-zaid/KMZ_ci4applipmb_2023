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
        <td><?= $cmball['prodilulus'] ?></td>
    </tr>
<?php
    $no++;
endforeach;
?>