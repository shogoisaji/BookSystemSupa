<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="login.blade.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-gray-800 text-sm py-4 dark:bg-gray-200">
  <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
    <div class="flex items-center justify-between">
      <a class="flex-none text-4xl font-semibold text-white dark:text-gray-600" href="#">書籍一覧</a>
    </div>
    <div id="navbar-dark" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
      <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
        <a class="font-medium text-gray-400 hover:text-orange-500 dark:text-orange-500 dark:hover:text-gray-400" href="#">Account</a>
      </div>
    </div>
  </nav>
</header>

<div class="bg-contain bg-center h-screen" style="background-image: url('/images/background.jpg')">
  <div class="flex flex-col pt-20">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th scope="col" class="text-lg px-6 py-3 text-left font-bold text-white">タイトル</th>
                <th scope="col" class="text-lg px-6 py-3 text-left font-bold text-white">著者</th>
                <th scope="col" class="text-lg px-6 py-3 text-left font-bold text-white">オススメ</th>
                <th scope="col" class="text-lg px-6 py-3 text-left font-bold text-white">詳細</th>
              </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$book->title}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$book->author}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$book->comment}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a class="text-blue-500 hover:text-blue-700" href="#">詳細</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- ページ遷移　仮で1ページ2件設定 -->
          {{$books->links()}}
        </div>
      </div>
    </div>
    <container class="bg-amber-900">
      <nav class="flex items-center space-x-2 place-content-center">
        <a class="text-white hover:text-yellow-400 p-4 inline-flex items-center gap-2 rounded-md" href="#">
          <span aria-hidden="true">«</span>
          <span>Previous</span>
        </a>
        <a class="w-10 h-10 bg-orange-400 text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="#" aria-current="page">1</a>
        <a class="w-10 h-10 text-white hover:text-yellow-400 p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">2</a>
        <a class="w-10 h-10 text-white hover:text-yellow-400 p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">3</a>
        <a class="text-white hover:text-yellow-400 p-4 inline-flex items-center gap-2 rounded-md" href="#">
          <span>Next</span>
          <span aria-hidden="true">»</span>
        </a>
      </nav>
    </container>
  </div>