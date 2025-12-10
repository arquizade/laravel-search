<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tailwind CSS v4 - Form Components Kitchen Sink</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen py-12 px-6">
            <div class="max-w-6xl mx-auto">
                <!-- Header -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-8">
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">
                        📋 Form Components Kitchen Sink
                    </h1>
                    <p class="text-gray-600 dark:text-gray-300 text-lg">
                        Tailwind CSS v4 - Comprehensive form component examples
                    </p>
                </div>

                <form class="space-y-8">
                    <!-- Text Inputs -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Text Inputs</h2>

                        <div class="space-y-6">
                            <!-- Basic Input -->
                            <div>
                                <label for="basic-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Basic Input
                                </label>
                                <input
                                    type="text"
                                    id="basic-input"
                                    name="basic-input"
                                    placeholder="Enter your name"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors"
                                >
                            </div>

                            <!-- Input with Helper Text -->
                            <div>
                                <label for="email-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Email Address
                                </label>
                                <input
                                    type="email"
                                    id="email-input"
                                    name="email"
                                    placeholder="you@example.com"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors"
                                >
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">We'll never share your email with anyone else.</p>
                            </div>

                            <!-- Input with Icon -->
                            <div>
                                <label for="search-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Search
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        id="search-input"
                                        placeholder="Search..."
                                        class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors"
                                    >
                                </div>
                            </div>

                            <!-- Input with Error State -->
                            <div>
                                <label for="error-input" class="block text-sm font-medium text-red-700 dark:text-red-400 mb-2">
                                    Username (Error State)
                                </label>
                                <input
                                    type="text"
                                    id="error-input"
                                    value="invalid@username"
                                    class="w-full px-4 py-2 border-2 border-red-500 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-white transition-colors"
                                >
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">Username cannot contain special characters.</p>
                            </div>

                            <!-- Input with Success State -->
                            <div>
                                <label for="success-input" class="block text-sm font-medium text-green-700 dark:text-green-400 mb-2">
                                    Username (Success State)
                                </label>
                                <input
                                    type="text"
                                    id="success-input"
                                    value="validusername"
                                    class="w-full px-4 py-2 border-2 border-green-500 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white transition-colors"
                                >
                                <p class="mt-2 text-sm text-green-600 dark:text-green-400">Username is available!</p>
                            </div>

                            <!-- Disabled Input -->
                            <div>
                                <label for="disabled-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Disabled Input
                                </label>
                                <input
                                    type="text"
                                    id="disabled-input"
                                    value="This field is disabled"
                                    disabled
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-400 cursor-not-allowed"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Textarea</h2>

                        <div class="space-y-6">
                            <!-- Basic Textarea -->
                            <div>
                                <label for="basic-textarea" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Message
                                </label>
                                <textarea
                                    id="basic-textarea"
                                    rows="4"
                                    placeholder="Enter your message..."
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white resize-none transition-colors"
                                ></textarea>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Maximum 500 characters</p>
                            </div>

                            <!-- Resizable Textarea -->
                            <div>
                                <label for="resizable-textarea" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Resizable Message
                                </label>
                                <textarea
                                    id="resizable-textarea"
                                    rows="4"
                                    placeholder="This textarea is resizable..."
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white resize-y transition-colors"
                                ></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Select Dropdowns -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Select Dropdowns</h2>

                        <div class="space-y-6">
                            <!-- Basic Select -->
                            <div>
                                <label for="basic-select" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Country
                                </label>
                                <select
                                    id="basic-select"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors"
                                >
                                    <option value="">Select a country</option>
                                    <option value="us">United States</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="ca">Canada</option>
                                    <option value="au">Australia</option>
                                    <option value="de">Germany</option>
                                </select>
                            </div>

                            <!-- Select with Groups -->
                            <div>
                                <label for="grouped-select" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Programming Language
                                </label>
                                <select
                                    id="grouped-select"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors"
                                >
                                    <option value="">Select a language</option>
                                    <optgroup label="Frontend">
                                        <option value="js">JavaScript</option>
                                        <option value="ts">TypeScript</option>
                                    </optgroup>
                                    <optgroup label="Backend">
                                        <option value="php">PHP</option>
                                        <option value="python">Python</option>
                                        <option value="ruby">Ruby</option>
                                        <option value="go">Go</option>
                                    </optgroup>
                                </select>
                            </div>

                            <!-- Multiple Select -->
                            <div>
                                <label for="multiple-select" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Skills (Multiple)
                                </label>
                                <select
                                    id="multiple-select"
                                    multiple
                                    size="5"
                                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors"
                                >
                                    <option value="laravel">Laravel</option>
                                    <option value="vue">Vue.js</option>
                                    <option value="react">React</option>
                                    <option value="tailwind">Tailwind CSS</option>
                                    <option value="alpine">Alpine.js</option>
                                </select>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Hold Ctrl/Cmd to select multiple options</p>
                            </div>
                        </div>
                    </div>

                    <!-- Checkboxes -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Checkboxes</h2>

                        <div class="space-y-6">
                            <!-- Basic Checkboxes -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                                    Interests
                                </label>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <input
                                            id="checkbox-1"
                                            type="checkbox"
                                            value="design"
                                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <label for="checkbox-1" class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                                            Design
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input
                                            id="checkbox-2"
                                            type="checkbox"
                                            value="development"
                                            checked
                                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <label for="checkbox-2" class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                                            Development
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input
                                            id="checkbox-3"
                                            type="checkbox"
                                            value="marketing"
                                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <label for="checkbox-3" class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                                            Marketing
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Checkbox with Description -->
                            <div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input
                                            id="checkbox-description"
                                            type="checkbox"
                                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                    </div>
                                    <div class="ml-3">
                                        <label for="checkbox-description" class="font-medium text-gray-700 dark:text-gray-300">
                                            Newsletter Subscription
                                        </label>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            Get notified when new features are released and updates are available.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions Checkbox -->
                            <div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input
                                            id="terms"
                                            type="checkbox"
                                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                    </div>
                                    <div class="ml-3">
                                        <label for="terms" class="text-sm text-gray-700 dark:text-gray-300">
                                            I agree to the <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">Terms and Conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Radio Buttons -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Radio Buttons</h2>

                        <div class="space-y-6">
                            <!-- Basic Radio Buttons -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                                    Subscription Plan
                                </label>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <input
                                            id="radio-1"
                                            type="radio"
                                            name="plan"
                                            value="free"
                                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <label for="radio-1" class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                                            Free - $0/month
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input
                                            id="radio-2"
                                            type="radio"
                                            name="plan"
                                            value="pro"
                                            checked
                                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <label for="radio-2" class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                                            Pro - $19/month
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input
                                            id="radio-3"
                                            type="radio"
                                            name="plan"
                                            value="enterprise"
                                            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <label for="radio-3" class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                                            Enterprise - $99/month
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Radio Buttons with Cards -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                                    Notification Method
                                </label>
                                <div class="space-y-3">
                                    <label for="notification-email" class="flex items-start p-4 border-2 border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <input
                                            id="notification-email"
                                            type="radio"
                                            name="notification"
                                            value="email"
                                            checked
                                            class="mt-1 w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <div class="ml-3">
                                            <div class="font-medium text-gray-700 dark:text-gray-300">Email</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Get notified via email</div>
                                        </div>
                                    </label>

                                    <label for="notification-sms" class="flex items-start p-4 border-2 border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <input
                                            id="notification-sms"
                                            type="radio"
                                            name="notification"
                                            value="sms"
                                            class="mt-1 w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <div class="ml-3">
                                            <div class="font-medium text-gray-700 dark:text-gray-300">SMS</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Get notified via text message</div>
                                        </div>
                                    </label>

                                    <label for="notification-push" class="flex items-start p-4 border-2 border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <input
                                            id="notification-push"
                                            type="radio"
                                            name="notification"
                                            value="push"
                                            class="mt-1 w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                        >
                                        <div class="ml-3">
                                            <div class="font-medium text-gray-700 dark:text-gray-300">Push Notification</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Get notified via push notification</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- File Inputs -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">File Inputs</h2>

                        <div class="space-y-6">
                            <!-- Basic File Input -->
                            <div>
                                <label for="file-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Upload File
                                </label>
                                <input
                                    type="file"
                                    id="file-input"
                                    class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-blue-900 dark:file:text-blue-300"
                                >
                            </div>

                            <!-- Multiple File Input -->
                            <div>
                                <label for="multiple-files" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Upload Multiple Files
                                </label>
                                <input
                                    type="file"
                                    id="multiple-files"
                                    multiple
                                    class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 dark:file:bg-green-900 dark:file:text-green-300"
                                >
                            </div>

                            <!-- Image Upload with Preview Area -->
                            <div>
                                <label for="image-upload" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Upload Image
                                </label>
                                <input
                                    type="file"
                                    id="image-upload"
                                    accept="image/*"
                                    class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100 dark:file:bg-purple-900 dark:file:text-purple-300"
                                >
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Range Slider -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Range Slider</h2>

                        <div class="space-y-6">
                            <!-- Basic Range -->
                            <div>
                                <label for="basic-range" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Volume
                                </label>
                                <input
                                    type="range"
                                    id="basic-range"
                                    min="0"
                                    max="100"
                                    value="50"
                                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                >
                                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                                    <span>0</span>
                                    <span>50</span>
                                    <span>100</span>
                                </div>
                            </div>

                            <!-- Price Range -->
                            <div>
                                <label for="price-range" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Price Range ($0 - $1000)
                                </label>
                                <input
                                    type="range"
                                    id="price-range"
                                    min="0"
                                    max="1000"
                                    value="500"
                                    step="50"
                                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Toggle Switches -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Toggle Switches</h2>

                        <div class="space-y-6">
                            <!-- Basic Toggle -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Enable Notifications</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Auto-save</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-sm font-medium text-gray-700 dark:text-gray-300">Dark Mode</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Toggle dark mode theme</div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Form Buttons -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Form Buttons</h2>

                        <div class="flex flex-wrap gap-4">
                            <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors focus:ring-4 focus:ring-blue-300">
                                Submit Form
                            </button>

                            <button type="button" class="px-6 py-2.5 bg-gray-600 hover:bg-gray-700 text-white font-medium rounded-lg transition-colors focus:ring-4 focus:ring-gray-300">
                                Save Draft
                            </button>

                            <button type="reset" class="px-6 py-2.5 bg-white dark:bg-gray-700 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors focus:ring-4 focus:ring-gray-200">
                                Reset
                            </button>

                            <button type="button" disabled class="px-6 py-2.5 bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-400 font-medium rounded-lg cursor-not-allowed">
                                Disabled
                            </button>

                            <button type="button" class="px-6 py-2.5 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-medium rounded-lg transition-all focus:ring-4 focus:ring-purple-300">
                                Gradient Button
                            </button>
                        </div>
                    </div>

                    <!-- Input Groups -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Input Groups</h2>

                        <div class="space-y-6">
                            <!-- Input with Add-on Text -->
                            <div>
                                <label for="url-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Website URL
                                </label>
                                <div class="flex">
                                    <span class="inline-flex items-center px-4 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        https://
                                    </span>
                                    <input
                                        type="text"
                                        id="url-input"
                                        placeholder="example.com"
                                        class="rounded-none rounded-r-lg flex-1 min-w-0 px-4 py-2 border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                    >
                                </div>
                            </div>

                            <!-- Input with Button -->
                            <div>
                                <label for="email-subscribe" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Email Newsletter
                                </label>
                                <div class="flex">
                                    <input
                                        type="email"
                                        id="email-subscribe"
                                        placeholder="your@email.com"
                                        class="rounded-l-lg flex-1 min-w-0 px-4 py-2 border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                    >
                                    <button class="px-6 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-r-lg transition-colors">
                                        Subscribe
                                    </button>
                                </div>
                            </div>

                            <!-- Input with Icon and Button -->
                            <div>
                                <label for="coupon-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Promo Code
                                </label>
                                <div class="flex">
                                    <div class="relative flex-1">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>
                                        </div>
                                        <input
                                            type="text"
                                            id="coupon-input"
                                            placeholder="SAVE20"
                                            class="rounded-l-lg w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white"
                                        >
                                    </div>
                                    <button class="px-6 bg-green-600 hover:bg-green-700 text-white font-medium rounded-r-lg transition-colors">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Footer -->
                <div class="mt-8 text-center">
                    <a href="/" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">← Back to Home</a>
                </div>
            </div>
        </div>
    </body>
</html>

