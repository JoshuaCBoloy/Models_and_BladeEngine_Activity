<tbody class="bg-white divide-y divide-gray-200">
  @foreach($books as $book)
  <tr">
      <td class="px-6 py-4 text-sm font-medium text-gray-900">
          {{ $book->title }}
      </td>
      <td class="px-6 py-4 text-sm text-gray-700">
          {{ $book->author }}
      </td>
      <td class="px-6 py-4 text-sm text-gray-700">
          {{ $book->isbn }}
      </td>
      <td class="px-6 py-4 text-sm text-gray-700">
          {{ $book->description }}
      </td>
      <td class="px-6 py-4 text-sm text-gray-700">
          {{ $book->date_published }}
      </td>
  </tr>
  @endforeach
</tbody>
</body>
</html>
