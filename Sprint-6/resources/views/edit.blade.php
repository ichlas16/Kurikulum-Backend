<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
<div class="display:flex;justify-content:center">
    <form action="{{ route('santri.update') }}" method="post">
    @csrf
        <table style="width:70vw;display:flex;justify-content:center;background-color:aqua">
            <tr>
            <td> <label for="name">Nama</label></td>
                <td class="td">
                    <input type="text" name="name" id="name" value=" {{ $santri->nama }} ">
                </td>
            </tr>
            <tr>
            <td> <label for="age">Umur</label></td>
                <td class="td">
                    <input type="text" name="age" id="age" value="{{ $santri->age }}">
                <input type="submit" value="Tambah Data">
                </td>
            </tr>
            <tr>
            <td> <label for="city">Alamat</label></td>
                <td class="td">
                    <input type="text" name="city" id="city" value="{{ $santri->city }}">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>