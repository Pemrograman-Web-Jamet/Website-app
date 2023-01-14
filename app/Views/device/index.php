<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <!DOCTYPE html>
    <html>
    <style type="text/css">
        .button a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-2">Daftar Barang</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Device Name</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img img class="image" width=300px src="https://t.ctcdn.com.br/XHkDlZ1LxzJ9c9PQjMrkrcOmbMY=/512x288/smart/filters:format(webp)/i352773.jpeg"></img>
                                </td>
                                <td>Tablet</td>
                                <td>Samsung</td>
                                <td>19</td>
                                <td>1</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/samsung">Details</a></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <img img class="image" width=300px src="http://cdn.home-designing.com/wp-content/uploads/2019/09/smart-modern-minimalist-printer.jpg"></img>
                                </td>
                                <td>Wireless Printer</td>
                                <td>HP</td>
                                <td>10</td>
                                <td>1</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/hp">Details</a></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <img img class="image" width=300px src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOWHFJ8-hjS-0rhtDjv5unlbLeyYLcLfcYiPgqfiS4dAYlMebbNzTC8uWeGxeKiCaLX98&usqp=CAU"></img>
                                </td>
                                <td>VoIP Phones</td>
                                <td>Ceria</td>
                                <td>21</td>
                                <td>1</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/ceria">Details</a></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <img img class="image" width=300px src="https://1.bp.blogspot.com/-Bd0QlHLhJRM/YNBED2uAkJI/AAAAAAAAp6o/6zJCCkBwewAv8v6YFWiSQFpxV2UVlpXhwCLcBGAsYHQ/s510/D8F734B7-EB39-4815-8435-44628EC69F97.png"></img>
                                </td>
                                <td>Tablet</td>
                                <td>Apple</td>
                                <td>0</td>
                                <td>0</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/apple">Details</a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</html>
<?= $this->endSection(); ?>