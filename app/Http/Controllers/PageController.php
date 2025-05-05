<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function Profilepage()
    {
        return view('profile');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $overview = [
        'in_progress' => 5,
        'completed' => 3,
        'certificates' => 2,
        'favorites' => 7,
        ];
        $aktivitas = [
            [
                'judul' => 'Learning Data Analysis with Python',
                'status' => 'Popular',
                'link' => '#'
            ],
            [
                'judul' => 'Learning Project Management Basics',
                'status' => 'Popular',
                'link' => '#'
            ],
            [
                'judul' => 'Learning Cloud Computing with AWS',
                'status' => 'Popular',
                'link' => '#'
            ]
        ];

        return view('dashboard', compact('aktivitas','username','overview'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        return view('pengelolaan', compact('username'));
    }

    public function kelas(Request $request)
    {
        $courses = [
            [
                'id' => 1,
                'judul' => 'Learning Data Analysis with Python',
                'deskripsi' => 'Learn how to analyze data using Python and its libraries, including NumPy, Pandas, and Matplotlib.',
                'modul' => 61,
                'siswa' => 58237,
                'gambar' => 'python.jpg',
            ],
            [
                'id' => 2,
                'judul' => 'Learning Front-End Web Development Toolset',
                'deskripsi' => 'Learn the essential tools for front-end web development, including HTML, CSS, and JavaScript.',
                'modul' => 131,
                'siswa' => 2428,
                'gambar' => 'frontend.png',
            ],
            [
                'id' => 3,
                'judul' => 'Learning Project Management Basics',
                'deskripsi' => 'Learn the basics of project management, including planning, execution, and monitoring.',
                'modul' => 38,
                'siswa' => 23067,
                'gambar' => 'manajemen.jpg',
            ],
            [
                'id' => 4,
                'judul' => 'Learning Haskell for Functional Programming',
                'deskripsi' => 'Learn the fundamentals of Haskell, a functional programming language, and how to apply it in real-world scenarios.',
                'modul' => 65,
                'siswa' => 611,
                'gambar' => 'haskell.jpg',
            ],
            [
                'id' => 5,
                'judul' => 'Learning Web3 and Blockchain Development',
                'deskripsi' => 'Learn the basics of Web3 and blockchain development, including smart contracts and decentralized applications.',
                'modul' => 54,
                'siswa' => 15400,
                'gambar' => 'datascience.jpg',
            ],
            [
                'id' => 6,
                'judul' => 'Learning SQL for Data Science',
                'deskripsi' => 'Learn how to use SQL for data science, including querying databases and analyzing data.',
                'modul' => 40,
                'siswa' => 9800,
                'gambar' => 'sql.jpg',
            ],
            [
                'id'=> 7,
                'judul'=> 'Learning JavaScript for Web Development',
                'deskripsi'=> 'Learn the fundamentals of JavaScript and how to use it for web development.',
                'modul'=> 75,
                'siswa'=> 12000,
                'gambar'=> 'javascript.jpg',
            ]
            ,
            [
                'id'=> 8,
                'judul'=> 'Learning Cybersecurity Fundamentals',
                'deskripsi'=> 'Learn the fundamentals of cybersecurity, including network security and risk management.',
                'modul'=> 45,
                'siswa'=> 5000,
                'gambar'=> 'cybersecurity.jpg',
            ],
            [
                'id'=> 9,
                'judul'=> 'Learning Cloud Computing with AWS',
                'deskripsi'=> 'Learn the basics of cloud computing and how to use AWS for cloud services.',
                'modul'=> 60,
                'siswa'=> 20000,
                'gambar'=> 'aws.jpg',
            ],
        ];

        return view('pengelolaan', compact('courses'));
    }
}
