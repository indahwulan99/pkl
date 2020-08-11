SELECT ind.`nib`, pm.nama, pm.`alamat`, ind.`namaind`, ind.`namaproduk`, ind.`tahun`, ind.`alamatind`,
 pm.`sosmed`, kec.namakec
    FROM industri ind, pemilik pm, kecamatan kec
    WHERE ind.nib = pm.nib
    AND ind.`id_kec` = kec.`id_kec`