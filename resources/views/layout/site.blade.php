<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
            margin:0;
            padding:30px;
        }

        .container{
            max-width:1100px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            box-sizing: border-box;
        }

        h3.center{
            text-align:center;
            margin-top: 0;
            margin-bottom:30px;
            color: #1e293b;
            font-size: 28px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th, td{
            border:1px solid #ddd;
            padding:12px 10px;
            text-align:left;
        }

        th{
            background:#2563eb;
            color:white;
        }

        tr:nth-child(even){
            background:#f9fafb;
        }

        img{
            width:60px;
            height:60px;
            object-fit:cover;
            border-radius:6px;
        }

        .row{
            margin-top:25px;
        }

        .btn{
            padding:10px 20px;
            text-decoration:none;
            border-radius:6px;
            color:white;
            display:inline-block;
            border:none;
            cursor:pointer;
            font-size:14px;
            font-weight: bold;
            transition: background 0.2s, opacity 0.2s;
        }

        .add{ background:#2563eb; }
        .edit{ background:#f59e0b; }
        .delete{ background:#ef4444; }
        .deep-orange{ background:#ff5722; }
        .blue{ background:#2563eb; }

        .btn:hover{
            opacity:0.9;
        }

        .acoes a{
            margin-right:5px;
        }

        .input-field {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .input-field input[type="text"] {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            outline: none;
            background: #fff;
            color: #334155;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-sizing: border-box;
            width: 100%;
        }

        .input-field input[type="text"]:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .file-field.input-field {
            border: 1px solid #ddd;
            padding: 12px;
            border-radius: 6px;
            background: #f9fafb;
            flex-direction: row;
            align-items: center;
            gap: 15px;
            box-sizing: border-box;
        }

        .file-field .btn {
            margin: 0;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
        }

        .file-field input[type="file"] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
        }

        .file-path-wrapper {
            flex-grow: 1;
        }

        .file-path-wrapper input[type="text"] {
            margin: 0 !important;
        }

        .preview-box {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            background: #f8fafc;
        }

        .preview-box img {
            width: 90px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #cbd5e1;
            display: block;
        }

        .preview-box span {
            font-size: 13px;
            color: #64748b;
            font-weight: bold;
        }

        .input-field p {
            margin: 0;
        }

        .input-field label {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            user-select: none;
        }

        .input-field input[type="checkbox"] {
            margin: 0 10px 0 0;
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #2563eb;
        }

        .input-field label span {
            font-size: 15px;
            color: #1e293b;
            font-weight: bold;
        }

        .btn-google {
    background: #4285f4;
    color: white;
    }

    .btn-google:hover {
        background: #3367d6;
    }

    .input-field input[type="password"] {
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 15px;
        outline: none;
        background: #fff;
        color: #334155;
        transition: border-color 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
        width: 100%;
    }

    .input-field input[type="password"]:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
    }
    </style>
</head>
<body>

    @yield('conteudo')

</body>
</html>