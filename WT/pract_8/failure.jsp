<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Failed</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0b1120] text-gray-100 min-h-screen flex items-center justify-center">

    <div class="text-center p-10 bg-slate-900/50 border border-rose-900/40 shadow-2xl rounded-2xl max-w-lg w-full backdrop-blur-md mx-4">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-rose-900/20 text-rose-500 mb-6 border border-rose-500/20 shadow-[0_0_20px_rgba(244,63,94,0.1)]">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
        </div>
        
        <h1 class="text-3xl font-light tracking-wide text-rose-500 mb-3">ACCESS DENIED</h1>
        <p class="text-slate-400 text-base mb-10">Invalid credentials detected. The username or password provided does not match our records.</p>
        
        <a href="login.jsp" class="inline-flex justify-center items-center px-6 py-2.5 border border-rose-500/30 rounded-lg text-sm font-medium text-rose-400 hover:bg-rose-500/10 hover:border-rose-400/50 transition-all">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Return to Login
        </a>
    </div>

</body>
</html>
