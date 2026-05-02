<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Successful</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0b1120] text-gray-100 min-h-screen flex items-center justify-center">

    <div class="text-center p-10 bg-slate-900/50 border border-emerald-900/40 shadow-2xl rounded-2xl max-w-lg w-full backdrop-blur-md mx-4">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-emerald-900/20 text-emerald-400 mb-6 border border-emerald-500/20 shadow-[0_0_20px_rgba(52,211,153,0.1)]">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        
        <h1 class="text-3xl font-light tracking-wide text-emerald-400 mb-3">ACCESS GRANTED</h1>
        <p class="text-slate-400 text-base mb-10">Welcome back to the portal. Your session has been successfully established and secured.</p>
        
        <a href="login.jsp" class="inline-flex justify-center items-center px-6 py-2.5 border border-emerald-500/30 rounded-lg text-sm font-medium text-emerald-400 hover:bg-emerald-500/10 hover:border-emerald-400/50 transition-all">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
            Sign Out
        </a>
    </div>

</body>
</html>
