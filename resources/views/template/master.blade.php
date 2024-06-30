<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>桃園市高級中等學校課程發展核心小組</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        .cover {
            @apply w-full h-full object-cover
        }
        p {
            @apply mb-4 leading-7
        }
        tr {
            @apply border
        }
        td,th {
            @apply p-3
        }
        td:last-of-type {
            @apply text-right
        }
        tr:nth-of-type(even){
            @apply bg-slate-200
        }
    </style>
</head>
<body>
    <div class="w-full h-1 bg-rose-500"></div>
    <div class="container flex flex-wrap mx-auto">
        <header class="w-full h-72 bg-slate-300 relative">
            <img src="/images/banner.jpg" alt="" class="cover">
            <h1 class="absolute text-center inset-0 m-auto text-6xl font-bold text-white w-fit h-fit drop-shadow-md">桃園市高級中等學校<br>課程發展核心小組</h1>
        </header>
    </div>
    <div class="container flex mx-auto">
        <nav class="w-72 shrink-0 flex flex-col bg-slate-200 h-100">
            <div class="flex flex-col space-y-4 p-5">
                <a href="/" class="hover:bg-rose-300 p-2 duration-300 rounded-lg"><span class="mr-2">&#5125;</span>核心小組簡介</a>
                <a href="/evolution" class="hover:bg-rose-300 p-2 duration-300 rounded-lg"><span class="mr-2">&#5125;</span>課程發展與精緻教學中心</a>
                <a href="/center" class="hover:bg-rose-300 p-2 duration-300 rounded-lg"><span class="mr-2">&#5125;</span>技術職業教育教學中心</a>
                <a href="/news" class="hover:bg-rose-300 p-2 duration-300 rounded-lg"><span class="mr-2">&#5125;</span>重要行事</a>
                <a href="/download" class="hover:bg-rose-300 p-2 duration-300 rounded-lg"><span class="mr-2">&#5125;</span>檔案下載</a>
                <a href="/activity" class="hover:bg-rose-300 p-2 duration-300 rounded-lg"><span class="mr-2">&#5125;</span>活動歷程</a>
            </div>
        </nav>
        <main class="px-10 py-5 w-full">
            @yield('main')
        </main>
    </div>
</body>
</html>
