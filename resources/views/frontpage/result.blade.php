<x-home-layout>
  <div class="flex items-center justify-center p-4 bg-blue-200 border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
    <div class="w-96 max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
      <form class="space-y-6" action="/store" method="POST">
        @csrf
        <h5 class="text-xl font-bold text-gray-900">Arithmetic Sequence Generator</h5>
        <span class="text-slate-400 text-xs">Calculator for Arithmetic Sequence</span>

        <div>
          <label for="a" class="block mb-2 text-sm font-medium text-gray-900">First Term</label>
          <input type="text" name="a" id="a" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter first term" required>
        </div>
        <div>
          <label for="b" class="block mb-2 text-sm font-medium text-gray-900">Difference Between Terms</label>
          <input type="text" name="b" id="b" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter differences between terms" required>
        </div>
        <div>
          <label for="n" class="block mb-2 text-sm font-medium text-gray-900">Term of N</label>
          <input type="text" name="n" id="n" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter term of n" required>
        </div>
        <button type="submit" class="w-24 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Compute</button>
      </form>
      <div class="w-full mt-3 max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow-md sm:p-2 md:p-4">
        <div>
          <h5>The Sequence:</h5>
          @foreach ($result as $r)
            {{ $r }}
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-home-layout>
