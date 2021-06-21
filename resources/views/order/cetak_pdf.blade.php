<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Order</title>
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 9pt;
            }
        </style>
        <center>
            <h5>Laporan Order</h4>
        </center>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th style="width:5px">#</th>
                    <th width="50px" style="align=center">ID User</th>
                    <th width="100px" style="align=center">Tanggal Sewa</th>
                    <th width="100px" style="align=left">Tanggal Kembali</th>
                    <th width="100px">Harga Sewa</th>
                    <th width="100px">Uang Bayar</th>
                    <th width="100px">Kembalian</th>
                    <th width="100px" style="border=1px">Status</th>
                </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($order as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->id_user }}</td>   
                    <td>{{ $k->tanggal_sewa }}</td>
                    <td>{{ $k->tanggal_kembali }}</td>                                                
                    <td>{{ $k->harga_sewa }}</td>                                         
                    <td>{{ $k->uang_bayar }}</td>
                    <td>{{ $k->kembalian }}</td>
                    <td>{{ $k->status }}</td>  
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>