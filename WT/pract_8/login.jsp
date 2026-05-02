<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Authentication</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0b1120] text-gray-100 min-h-screen flex items-center justify-center selection:bg-blue-500/30">

    <div class="w-full max-w-md p-8 sm:p-10 bg-slate-900/50 rounded-2xl border border-slate-700/50 shadow-2xl backdrop-blur-md">
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-500/10 text-blue-400 mb-4 border border-blue-500/20">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <h1 class="text-2xl font-light tracking-wide text-white">SYSTEM LOGIN</h1>
            <p class="text-sm text-slate-400 mt-2">Enter credentials to authenticate</p>
        </div>
        
        <form action="login.do" method="post" class="space-y-6">
            <div>
                <label for="uname" class="block text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">Username</label>
                <input type="text" name="uname" id="uname" required 
                    class="w-full px-4 py-3 bg-[#0f172a] border border-slate-700/60 rounded-xl focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/50 transition-all text-slate-200 placeholder-slate-600"
                    placeholder="Enter username" />
            </div>
            
            <div>
                <label for="upass" class="block text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">Password</label>
                <input type="password" name="upass" id="upass" required 
                    class="w-full px-4 py-3 bg-[#0f172a] border border-slate-700/60 rounded-xl focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/50 transition-all text-slate-200 placeholder-slate-600"
                    placeholder="Enter password" />
            </div>
            
            <button type="submit" 
                class="w-full flex justify-center py-3.5 px-4 rounded-xl text-sm font-medium text-white bg-blue-600/90 hover:bg-blue-500 border border-blue-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-slate-900 transition-all shadow-[0_0_15px_rgba(37,99,235,0.2)]">
                AUTHENTICATE
            </button>
        </form>
    </div>

</body>
</html>
