<div class="flex items-center justify-center min-h-screen bg-green-100">
  <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-green-700">Login</h2>

    <?php if (isset($data['error'])): ?>
      <p class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4 text-sm">
        <?= $data['error']; ?>
      </p>
    <?php endif; ?>

    <form method="POST" action="<?= BASEURL; ?>/login" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
        <input type="text" name="username" required
               class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" name="password" required
               class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <button type="submit"
              class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">
        Masuk
      </button>
    </form>
  </div>
</div>
