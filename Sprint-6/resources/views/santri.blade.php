<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr class="tr">
            <td class="td">
                No
            </td>
            <td class="td">
                Nama
            </td>
            <td class="td">
                Umur
            </td>
            <td class="td">
                Kota Asal
            </td>
        </tr>
            @foreach ($santri as $item)
        <tr class="tr">
            <td class="td">
                {{$item->id}}
            </td>
            <td class="td">
                {{$item->name}}
            </td>
            <td class="td">
                {{$item->age}}
            </td>
            <td class="td">
                {{$item->city}}
            </td>
        </tr>
            @endforeach
    </table>
</body>
</html>