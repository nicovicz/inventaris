<?php
use yii\helpers\ArrayHelper as ah;
?>

<div>
<div style="width:50%;float:left;x">
    <table style="font-size:11px" autosize="1">
        <tr>
            <th align="center" colspan="4">KEMENTERIAN PERHUBUNGAN</th>
        </tr>
        <tr>
            <th align="center" colspan="4">DIREKTORAT JENDERAL PERHUBUNGAN LAUT</th>
        </tr>
        <tr>
            <th align="center" colspan="4">SEKRETARIAT DIREKTORAT JENDERAL PERHUBUNGAN LAUT</th>
        </tr>
        <tr>
            <th colspan="4">&nbsp;</th>
        </tr>

        <tr>
            <th align="center" colspan="4">SURAT PENUNJUKAN PENGGUNAAN</th>
        </tr>
        <tr>
            <th align="center" colspan="4">KENDARAAN DINAS (SPPKD)</th>
        </tr>
        <tr>
            <th colspan="4">&nbsp;</th>
        </tr>
        <tr>
            <td align="center" colspan="4">Nomor : SPPKD/<?=ah::getValue($model,'id');?>/<?=Yii::$app->formatter->asDate(strtotime(ah::getValue($model,'created_at')),'php:m/Y');?></td>
        </tr>
        <tr>
            <th colspan="4">&nbsp;</th>
        </tr>
        <tr>
            <td align="center" >1.</td><td width="25%">Nama</td><td width="5%">:</td><td><?=ah::getValue($model,'nama_peminjam');?></td>
        </tr>
        <tr>
            <td align="center">2.</td><td>NIP</td><td>:</td><td><?=ah::getValue($model,'nip');?></td>
        </tr>
        <tr>
            <td align="center">3.</td><td>Pangkat/Golongan</td><td>:</td><td><?=ah::getValue($model,'pangkat_peminjam');?>
        (<?=ah::getValue($model,'golongan_peminjam');?>)
            </td>
        </tr>
        <tr>
            <td align="center">4.</td><td>Jabatan</td><td>:</td><td><?=ah::getValue($model,'jabatan_peminjam');?></td>
        </tr>
        <tr>
            <td align="center">5.</td><td>Unit Kerja</td><td>:</td><td><?=ah::getValue($model,'unit.nama');?></td>
        </tr>
        <tr>
            <td align="center">6.</td><td>Alamat Rumah</td><td>:</td><td><?=ah::getValue($model,'alamat_peminjam');?></td>
        </tr>
        <tr>
            <td align="center">7.</td><td>Diijinkan mulai tanggal</td><td>:</td><td><?=Yii::$app->formatter->asDate(strtotime(ah::getValue($model,'created_at')),'php:d F Y');?></td>
        </tr>
        <tr>
            <td align="center">8.</td><td>Tahun Pembuatan</td><td>:</td><td><?=Yii::$app->formatter->asDate(strtotime(ah::getValue($model,'tgl_pembuatan')),'php:Y');?></td>
        </tr>
        <tr>
            <td align="center">9.</td><td>No. Polisi</td><td>:</td><td><?=ah::getValue($model,'kendaraan.no_plat_merah');?></td>
        </tr>
        <tr>
            <td align="center">10.</td><td>Keterangan Lain-lain</td><td>:</td><td></td>
        </tr>
        <tr>
            <td align="center">11.</td><td colspan="3">Pengguna/pemakai kendaraan tersebut diwajibkan bertanggung jawab penuh atas perawatan dan pengamanannya.</td>
        </tr>
        <tr>
            <td align="center">12.</td><td colspan="3">Pengguna/ pemakai diwajibkan mentaati segala peraturan, berkaitan dengan Barang Milik Kekayaan Negara.</td>
        </tr>
        <tr>
            <td align="center">13.</td><td colspan="3">SPPKD ini hanya diperuntukkan bagi orang yang namanya tercantum dalam SPPKD tersebut dan tidak boleh dipindah tangankan kepada orang lain atau diperjual belikan.</td>
        </tr>
        <tr>
            <td align="center">14.</td><td colspan="3">Pelanggaran Penggunaan Pemakaian Kendaraan Dinas tersebut dapat dikenakan tindakan sangsi administrasi sesuai Ketentuan Hukum yang berlaku.</td>
        </tr>
        <tr>
            <td align="center">15.</td><td colspan="3">SPPKD ini berlaku selama 3 (tiga) tahun terhitung sejak tanggal diijinkan.</td>
        </tr>
        <tr>
            <td align="center">16.</td><td colspan="3">SPPKD yang habis masa berlakunya harus diperbaharui/ diperpanjang.</td>
        </tr>
        <tr>
            <th colspan="4">&nbsp;</th>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
                Jakarta, <?=Yii::$app->formatter->asDate(time());?>
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
                SEKRETARIS DIREKTORAT JENDERAL
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
                PERHUBUNGAN LAUT
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
            &nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
            &nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
            <u><?=ah::getValue($model,'nama_ttd');?></u>
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
                <?=ah::getValue($model,'pangkat_ttd');?> <?=ah::getValue($model,'golongan_ttd');?>
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" align="center">
                <?=ah::getValue($model,'nip_ttd');?>
            </td>
        </tr>
      </table>
</div>
<div style="width:50%;float:left">
 <table style="font-size:11px" autosize="1">
        <tr>
            <th align="center" colspan="2"><u>PERNYATAAN</u></th>
        </tr>
        <tr>
            <th align="center" colspan="2"></th>
        </tr>
        <tr>
            <th align="center" colspan="2"></th>
        </tr>
        <tr>
            <td colspan="2">
                Bahwa saya bersedia memenuhi segala ketentuan yang berlaku berkenaan dengan Penunjukan Penggunaan Kendaraan Dinas:
            </td>
        </tr>
        <tr>
            <td>1.</td><td>Menyerahkan kembali Kendaraan Dinas yang saya gunakan kepada Sekretariat Ditjen Hubla tanpa syarat apabila:</td>
        </tr>
        <tr>
            <td></td><td>a. Dinas Pindah keluar Daerah/ Negeri sekurang-kurangnya selama 2 (dua) tahun;</td>
        </tr>
        <tr>
            <td></td><td>b. Pindah Pekerjaan ke Unit Kerja lain (mutasi kerja);</td>
        </tr>
        <tr>
            <td></td><td>c. Berhenti dengan hormat dengan hak pensiun maupun tanpa hak pensiun dari Ditjen Hubla;dengan mengabaikan ketentuan angka 15 SPPKD ini.</td>
        </tr>
        <tr>
            <td>2.</td><td>Bahwa saya tidak akan melalaikan terhadap perawatan dan pengamanan Kendaraan Dinas tersebut dan tidak memindah tangankan/ menjual belikan kepada orang lain;</td>
        </tr>
        <tr>
            <td>3.</td><td>Demikian Pernyataan ini dibuat dengan sebenar-benarnya.;</td>
        </tr>
        <tr>
            <th align="center" colspan="2"></th>
        </tr>
        </table>
        <table width="50%" align="right" style="font-size:11px">
        <tr>
            <td></td>
            <td align="center"> Jakarta, <?=Yii::$app->formatter->asDate(time());?></td>
        </tr>
        <tr>
            <td></td>
            <td align="center">Pemegang Kendaraan Dinas</td>
        </tr>
        <tr>
            <th align="center" colspan="2">&nbsp;</th>
        </tr>
        <tr>
            <th align="center" colspan="2">&nbsp;</th>
        </tr>
         <tr>
            <th align="center" colspan="2">&nbsp;</th>
        </tr>
        <tr>
            <td></td>
            <td align="center"><u><?=ah::getValue($model,'nama_peminjam');?></u></td>
        </tr>
        <tr>
            <td></td>
            <td align="center"><?=ah::getValue($model,'pangkat_peminjam');?> <?=ah::getValue($model,'golongan_peminjam');?></td>
        </tr>
        <tr>
            <td></td>
            <td align="center"><?=ah::getValue($model,'nip');?></td>
        </tr>
      </table>
</div>
</div>
