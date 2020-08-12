-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2020 pada 11.53
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukmft_itc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `is_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyas`
--

CREATE TABLE `karyas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `desc_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `juara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lomba` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mhs_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mhs_angkatan` int(11) DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyas`
--

INSERT INTO `karyas` (`id`, `judul`, `slug`, `kategori_id`, `desc_singkat`, `desc`, `juara`, `lomba`, `mhs_nama`, `mhs_angkatan`, `gambar`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi Android Mewarnai Bagus', 'aplikasi-android-mewarnai-bagus', 3, 'Aplikasi untuk anak SD', 'Aplikasi untuk anak SD Aplikasi untuk anak SD Aplikasi untuk anak SD', 'Juara 1', 'National Championship', 'Buba', 2020, 'karya/mewarnai_1596350056.webp', 'https://kuepedia.com/', '2020-08-01 22:27:34', '2020-08-01 23:34:16'),
(3, 'Aplikasi Manajemen Kampus', 'aplikasi-manajemen-kampus', 1, 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsum maxime', 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsum maxime, dignissimos in ad obcaecati quo, voluptate sit doloribus numquam nihil labore natus reprehenderit libero iste quae quod quibusdam? Nostrum quaerat mollitia, rerum sed illo, ipsam, deserunt nisi omnis quia dolore quo! Cupiditate error ex eum optio facilis, dicta exercitationem. Numquam veritatis et debitis minus quo omnis excepturi beatae suscipit repellat assumenda laboriosam fugiat cum modi, perferendis, delectus quasi placeat ad, non explicabo consectetur quas aut quidem. Repudiandae delectus eligendi officia, eos odio, quaerat enim molestiae architecto saepe excepturi quas placeat alias quo aut, aliquam ut qui est eaque beatae.', NULL, NULL, NULL, NULL, 'karya/laptop_1597218967.webp', NULL, '2020-08-12 00:56:07', '2020-08-12 00:56:07'),
(4, 'Game BOS (Battle of Surabaya)', 'game-bos-battle-of-surabaya', 3, 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsum maxime', 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsum maxime, dignissimos in ad obcaecati quo, voluptate sit doloribus numquam nihil labore natus reprehenderit libero iste quae quod quibusdam? Nostrum quaerat mollitia, rerum sed illo, ipsam, deserunt nisi omnis quia dolore quo! Cupiditate error ex eum optio facilis, dicta exercitationem. Numquam veritatis et debitis minus quo omnis excepturi beatae suscipit repellat assumenda laboriosam fugiat cum modi, perferendis, delectus quasi placeat ad, non explicabo consectetur quas aut quidem. Repudiandae delectus eligendi officia, eos odio, quaerat enim molestiae architecto saepe excepturi quas placeat alias quo aut, aliquam ut qui est eaque beatae.', 'Juara 1', 'Gemastik 2021', 'Tim Hore', NULL, 'karya/bos_1597219049.png', NULL, '2020-08-12 00:57:29', '2020-08-12 00:57:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya_fotos`
--

CREATE TABLE `karya_fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karya_id` int(11) NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karya_fotos`
--

INSERT INTO `karya_fotos` (`id`, `karya_id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 1, '1', 'karya_foto/2-materi_1596352983.png', '2020-08-02 00:23:03', '2020-08-02 00:23:03'),
(6, 1, '2', 'karya_foto/3-materi-detail_1596352993.png', '2020-08-02 00:23:13', '2020-08-02 00:23:13'),
(7, 1, '3', 'karya_foto/4-games_1596353003.png', '2020-08-02 00:23:23', '2020-08-02 00:23:23'),
(9, 1, 'Tes', 'karya_foto/mewarnai_1597221263.webp', '2020-08-12 01:34:23', '2020-08-12 01:34:23'),
(10, 1, 'Tos', 'karya_foto/laptop_1597221271.webp', '2020-08-12 01:34:31', '2020-08-12 01:34:31'),
(11, 1, 'Ea', 'karya_foto/gem_1597221296.png', '2020-08-12 01:34:56', '2020-08-12 01:34:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya_kategoris`
--

CREATE TABLE `karya_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karya_kategoris`
--

INSERT INTO `karya_kategoris` (`id`, `kategori`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'Web, Frontend, Backend, HTML, CSS, Javascript', '2020-08-01 21:26:43', '2020-08-01 21:32:55'),
(2, 'Android App', 'Android, Java', '2020-08-01 21:33:22', '2020-08-01 21:33:22'),
(3, 'Games', 'Games, Unity, Cocos2d', '2020-08-01 21:33:56', '2020-08-01 21:33:56'),
(4, 'Design', 'Mockup, Ilustrator, Poster', '2020-08-01 21:34:17', '2020-08-01 21:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_27_153129_create_events_table', 1),
(5, '2020_07_27_153142_create_karyas_table', 1),
(6, '2020_07_27_153153_create_karya_kategoris_table', 1),
(7, '2020_07_27_153213_create_settings_table', 1),
(8, '2020_07_27_153228_create_pages_table', 1),
(9, '2020_07_27_153237_create_penguruses_table', 1),
(10, '2020_07_27_153448_create_sliders_table', 1),
(11, '2020_07_27_153919_create_prestasis_table', 1),
(12, '2020_08_02_051115_create_karya_fotos_table', 2),
(13, '2020_08_09_024040_create_prestasi_kategoris_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `judul`, `slug`, `page_id`, `isi`, `banner`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Visi & Misi', 'visi-misi', NULL, '<h1>Visi</h1>\r\n\r\n<p>Pada mulanya UKMFT-ITC adalah sebuah kelompok mahasiswa yang berkumpul&nbsp; untuk mempelajari mengenai komputer sehingga kelompok itu menyebut dirinya dengan &ldquo;Kelompok Pengguna Komputer (KPK)&rdquo;. Mereka sering berkumpul untuk bersama-sama belajar tentang komputer. Karena mereka merasa perlu adanya status yang jelas mengenai kedudukan perkumpulan tersebut di dalam kampus, terutama dalam menampung bakat minat mahasiswa fakultas teknik tentang teknologi informasi, akhirnya mahasiswa yang tergabung dalam KPK tadi sepakat membentuk sebuah wadah resmi yang kemudian berkibar dengan nama &ldquo;Information Technology Center (ITC)&rdquo; yang lahir tepat tanggal 05 Oktober 2002. Hingga saat ini jumlah mahasiswa yang tergabung dalam ITC sudah mencapai kurang lebih 565 orang.</p>\r\n\r\n<h1>Misi</h1>\r\n\r\n<p>Pada mulanya UKMFT-ITC adalah sebuah kelompok mahasiswa yang berkumpul&nbsp; untuk mempelajari mengenai komputer sehingga kelompok itu menyebut dirinya dengan &ldquo;Kelompok Pengguna Komputer (KPK)&rdquo;. Mereka sering berkumpul untuk bersama-sama belajar tentang komputer. Karena mereka merasa perlu adanya status yang jelas mengenai kedudukan perkumpulan tersebut di dalam kampus, terutama dalam menampung bakat minat mahasiswa fakultas teknik tentang teknologi informasi, akhirnya mahasiswa yang tergabung dalam KPK tadi sepakat membentuk sebuah wadah resmi yang kemudian berkibar dengan nama &ldquo;Information Technology Center (ITC)&rdquo; yang lahir tepat tanggal 05 Oktober 2002. Hingga saat ini jumlah mahasiswa yang tergabung dalam ITC sudah mencapai kurang lebih 565 orang.</p>', '', NULL, '2020-08-12 00:31:06', '2020-08-12 00:31:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penguruses`
--

CREATE TABLE `penguruses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lomba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `juara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasis`
--

INSERT INTO `prestasis` (`id`, `lomba`, `juara`, `tahun`, `tingkat`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Gemastik', 'Juara 3', 2020, 'Nasional', '<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsum maxime, dignissimos in ad obcaecati quo, voluptate sit doloribus numquam nihil labore natus reprehenderit libero iste quae quod quibusdam? Nostrum quaerat mollitia, rerum sed illo, ipsam, deserunt nisi omnis quia dolore quo! Cupiditate error ex eum optio facilis, dicta exercitationem. Numquam veritatis et debitis minus quo omnis excepturi beatae suscipit repellat assumenda laboriosam fugiat cum modi, perferendis, delectus quasi placeat ad, non explicabo consectetur quas aut quidem. Repudiandae delectus eligendi officia, eos odio, quaerat enim molestiae architecto saepe excepturi quas placeat alias quo aut, aliquam ut qui est eaque beatae.</p>', 'prestasi/gem_1597219211.png', '2020-08-12 01:00:11', '2020-08-12 01:00:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_kategoris`
--

CREATE TABLE `prestasi_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasi_kategoris`
--

INSERT INTO `prestasi_kategoris` (`id`, `kategori`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Nasional', 'Nasional', '2020-08-12 00:58:08', '2020-08-12 00:58:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'SITE_TITLE', 'UKMFT-ITC', '2020-08-12 01:05:56', '2020-08-12 01:05:56'),
(2, 'SITE_DESC', 'UKMFT-ITC adalah salah satu Unit Kegiatan Mahasiswa Fakultas Teknik (UKM-FT) Universitas Trunojoyo Madura. Berawal dari kelompok yang diberi nama \"Kelompok Penguna Komputer\" dan akhirnya mendeklarasikan dirinya dengan nama \"Information Technology Center\" pada tanggal 05 Oktober 2002', '2020-08-12 01:05:56', '2020-08-12 01:05:56'),
(3, 'SITE_SLOGAN', 'Don\'t Be Gaptek', '2020-08-12 01:05:56', '2020-08-12 01:05:56'),
(4, 'EMBED_YT', 'https://www.youtube.com/watch?v=7C1_8c2Tu4Y', '2020-08-12 01:05:56', '2020-08-12 01:05:56'),
(5, 'PROFIL_SINGKAT', 'UKMFT-ITC adalah salah satu Unit Kegiatan Mahasiswa Fakultas Teknik (UKM-FT) Universitas Trunojoyo Madura. Berawal dari kelompok yang diberi nama \"Kelompok Penguna Komputer\" dan akhirnya mendeklarasikan dirinya dengan nama \"Information Technology Center\" pada tanggal 05 Oktober 2002', '2020-08-12 01:05:56', '2020-08-12 01:05:56'),
(6, 'IS_OPEN_REC', 'y', '2020-08-12 01:05:56', '2020-08-12 01:05:56'),
(7, 'URL_OPEN_REC', 'https://www.youtube.com/watch?v=7C1_8c2Tu4Y', '2020-08-12 01:05:56', '2020-08-12 01:05:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$uiFZM4FfN8nfEl6rnN4A9.giAaHNVHVlnhPs15OG/fd2BmDQZ.byO', 'MaT1sZNC9cI729IkyOcKtkkCAbuhT4Tj991OhAoI5ZbdYzXpf7vVSjrz15vn', NULL, NULL),
(2, 'Superadmin', 'super_xyz@admin.com', NULL, '$2y$10$uiFZM4FfN8nfEl6rnN4A9.giAaHNVHVlnhPs15OG/fd2BmDQZ.byO', 'MaT1sZNC9cI729IkyOcKtkkCAbuhT4Tj991OhAoI5ZbdYzXpf7vVSjrz15vn', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyas`
--
ALTER TABLE `karyas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karya_fotos`
--
ALTER TABLE `karya_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karya_kategoris`
--
ALTER TABLE `karya_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penguruses`
--
ALTER TABLE `penguruses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi_kategoris`
--
ALTER TABLE `prestasi_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyas`
--
ALTER TABLE `karyas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `karya_fotos`
--
ALTER TABLE `karya_fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `karya_kategoris`
--
ALTER TABLE `karya_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prestasi_kategoris`
--
ALTER TABLE `prestasi_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
