-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-09-04 07:44:14
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `bestjob`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `companies`
--

CREATE TABLE `companies` (
  `id` int(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `companies`
--

INSERT INTO `companies` (`id`, `company`, `email`, `industry`, `occupation`, `tel`, `area`, `type`, `title`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '愛三工業株式会社', 'ny.0503@outlook.jp', '製造業', '事務・アシスタント', '09056789999', '愛知県', 'アナライザー', '◆ワークライフバランス重視◆\r\n事務経験者募集中', '愛工産業株式会社\r\n●大手自動車会社を取引先とし、板金部分（ドア・屋根などボディ）の成型工場\r\n●勤務先：愛知県県内\r\n●未経験歓迎・学歴、職歴不問\r\n●大手企業と同様の福利厚生・制服貸与・昼食補助\r\n●まずは簡単な事務作業から！取引先工場に納品する為のかんばん作業、あなたのペースに合わせて取引先との連絡や作業者の勤怠管理、経理等もお任せしたいと考えています。', '2022-08-22 09:08:24', '2022-08-25 15:17:50', NULL),
(4, '株式会社Sali', 'ny.0503@outlook.jp', '情報通信業', '販売・サービス職', '09056789999', '三重県', 'コントローラー', '◆自動車内装業◆\r\n車いじりが好きな方なら未経験OK！', '株式会社Sali\r\n●理念：セーフライフを掲げており、現在は自動車内装業を主な事業としていますが、そこにこだわらず世の中やユーザーの生活がより豊かになる仕事を幅広く展開していきます！\r\n●勤務先：三重県内ディーラー・中古車販売店\r\n●未経験歓迎・学歴、職歴不問\r\n●直行直帰・工具、作業着貸与・マイカー通期\r\n●設立2年目の会社なので会社が今後発展した際には大きく給与や待遇が上がります！\r\n整備業以外にも営業や事務、経営スキルも学べますので一緒に会社を大きくしていきましょう！', '2022-08-23 16:31:07', '2022-08-25 14:33:23', NULL),
(5, 'ソニー生命保険株式会社', 'ny.0503@outlook.jp', '金融・保険業', '営業職', '09056789999', '東京都', 'プロモーター', '◆ソニー生命保険営業◆\r\n成果に応じた給与で年収1,000万オーバーも当たり前の世界です！', 'ソニー生命保険株式会社\r\n●日本を代表するソニーグループが取り扱う生命保険の個人向け営業となります。\r\n●勤務先：全国どこでも希望を叶えます！\r\n●保険営業経験者大歓迎！未経験者でも熱意とある程度の経歴をお持ちの方でしたら実際に弊社で活躍されている方もいます！\r\n●全国47都道府県の各所に営業所を持ち、基本的には営業所にて事務作業や研修を行い、アポイントの取れたお客様の元に営業しに行くイメージです。\r\n●1年目は研修や営業のノウハウを覚えてもらうのに集中してもらうために面談時にお約束された基本給を支給、その間にも営業成績に応じたインセンティブを支給します！2年目からはご活躍された分だけ上限は無く、バリバリ稼げることが出来ます！', '2022-08-23 16:42:27', '2022-08-28 04:49:15', NULL),
(6, 'バタフライネットワーク', 'ny.0503@outlook.jp', '情報通信業', '企画・管理', '09056789999', '千葉県', 'プロモーター', '◆会社PR・SNS運用及びWEBマーケティング◆', 'バタフライネットワーク\r\n●アメリカ医療系IT企業の日本支社となります。\r\n弊社認知度向上のためのSNS運用（Youtube/Twitterなど）を主にWEBマーケティング事業を担ってもらいます。\r\n●WEBマーケティング・SNSに関する企画経験者募集\r\n●カジュアル勤務・フレックス制（11時～14時をコアタイムとして7時～20時の勤務時間内にて調整可能\r\n●年俸制（500万～700万）経歴に応じて給与変動', '2022-08-23 16:57:43', '2022-09-02 05:29:17', NULL),
(7, 'ビアードパパ株式会社', 'ny.0503@outlook.jp', '飲食店・宿泊業', '販売・サービス職', '09056789999', '大阪府', 'サポーター', '◆シュークリーム販売店舗責任者募集◆', 'ビアードパパ株式会社\r\n●全国250店舗、主にイオン内に店舗を構えています。\r\n●学歴・職歴不問、やる気があれば誰でもウェルカムです！\r\n●勤務地は希望を考慮、尚店長として経歴を積んでこれば全国転勤が発生します。\r\n●給与：25万～30万・賞与は業績連動型\r\n●勤務時間：週休2日シフト制（7時～23時の間で8時間）\r\n●社保加入・レジャー、各種アミューズメントパーク割引有り', '2022-08-23 17:07:33', '2022-09-02 05:43:08', NULL),
(8, '株式会社パデコ', 'ny.0503@outlook.jp', '教育・学習支援業', '公務員・教育・農林水産関連職', '09056789999', '新潟県', 'アナライザー', '◆教育コンサルタント募集◆', '株式会社パデコ\r\n●国際教育協力分野での技術協力プロジェクト業務、各種調査業務（案件形成、評価、セクター調査など）\r\n教育分野における国内の各種調査業務\r\n●TOEIC800点（もしくは同等の語学証明）以上\r\n・小学校教員免許もしくは中・高理数科教員免許\r\n・留学経験\r\n・国際学会での発表や投稿論文掲載など学術的な業績\r\n●給与：30～40万\r\n●交通費支給;完全週休2日制;長期休暇制度;各種社会保険完備;研修制度充実;資格取得支援制度;昇格・賞与あり', '2022-08-25 05:55:27', '2022-09-02 05:51:25', NULL),
(9, '株式会社日伸建設', 'ny.0503@outlook.jp', '建設業', '事務・アシスタント', '0912345678', '栃木県', 'コントローラー', '◆建設会社の一般事務員募集◆', '株式会社日伸建設\r\n◇仕事内容：各種書類管理、日報・勤怠管理、伝票整理・データ入力・安全書類作成、電話・来客対応など\r\n◇給与：月給／175,000円～250,000円\r\n※経験、能力に応じて、正当に評価・決定いたします\r\n※別途、残業代支給\r\n※試用期間2ヶ月あり\r\n◇応募条件：高卒以上\r\n◇PCの基本操作（ワード・エクセル・メール）\r\n◇建設会社にて事務業務に従事された経験のある方、歓迎致します\r\n◇明朗、快活な方、職場での調和を大切にされる方を求めています\r\n◇事務経験（3年以上）が必要です', '2022-09-02 05:55:17', NULL, NULL),
(10, 'JFEウエストテクノロジー株式会社', 'ny.0503@outlook.jp', '鉄鋼業', '技術職', '09056789999', '広島県', 'コントローラー', '◆技術スタッフ・鉱業・金属製品・鉄鋼業界の工場生産・製造◆', 'JFEウエストテクノロジー株式会社\r\n●鋼材を整える作業（精整）業務を中心に担当していただきます。\r\n●仕事内容\r\n構内鉄道の運転・管理\r\n鋼片の受払い（クレーン運転）・手入れ・検査\r\n鋼材の溶断・研磨・下処理 など\r\n●月給 216,000円 ＋ 諸手当（例／入社約3ヵ月後 月収 263,000円）\r\n●JFEスチール100％出資の「JFEグループ」として、製鉄プロセスの中核を担っている当社。技術・技能の研鑽や品質管理などを徹底し、日本のモノづくりを支えてきました。\r\n今回は当社で活躍する技術スタッフを募集。入社時点では専門的な知識や経験は不問なので、未経験の方もお気軽にお問合せください！入社後のサポート体制もしっかり整っており、新メンバーをお迎えする準備は万全です。', '2022-09-02 05:59:00', NULL, NULL),
(11, '富士通テン株式会社', 'ny.0503@outlook.jp', '運輸業', '営業職', '09056789999', '徳島県', 'コントローラー', '◆富士通グループ会社の一員として働くことが出来ます◆', '富士通テン株式会社\r\n●日本が世界に誇る富士通グループの子会社として、主に富士通製品の物流事業を担っています。\r\n●全国支社有り、勤務地は希望を最大限考慮します\r\n●給与：25万～30万\r\n●まずは簡単なピッキング（仕分け）作業から、半年程の研修期間の後に現場監督として仕事を覚えてもらいます。', '2022-09-02 06:06:32', NULL, NULL),
(15, '株式会社三河屋', 'ny.0503@outlook.jp', '建設業', '営業職', '09056789999', '青森県', 'コントローラー', '◆未経験でもITエンジニアを目指したい方！三河屋なら誰でもITエンジニアになる事が出来ます！◆', '株式会社三河屋\r\n●弊社は完全サポートの元、メンターや現役エンジニア講師による定期的な面談（悩みがあればいつでも聞きます！）やカリキュラム講義など決して一人の力だけで学ばせる会社ではありません！\r\nまた、将来的にめちゃくちゃ大きい事をやりたいので決してエンジニアになった後でも様々なポストを用意します！\r\n●給与：23万～30万（経験などにより変動）\r\n●勤務地：東京都内・愛知県内の各プロジェクト先（フルリモート案件も有り）\r\n●まずはエンジニアになるための研修を3か月～1年の間で終えてもらいます！（期間は個人のペースに合わせれます！）\r\nその後はプロジェクト先でエンジニアデビュー！\r\n●自社サービスも展開予定ですので、SES業務をある程度行った方は自社でじっくりと開発に取り組む事も出来ます！', '2022-09-04 00:58:49', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `company_user`
--

CREATE TABLE `company_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(20) UNSIGNED NOT NULL,
  `self_promotion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `company_user`
--

INSERT INTO `company_user` (`id`, `user_id`, `company_id`, `self_promotion`, `reason`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '自動車の調子が悪いために来店されたお客さまに故障診断を対応するときは、ていねいに故障個所や原因について納得してもらえる説明を心掛けています。なぜこの部分の修理が必要なのか、なぜこのような故障が発生するのかなどを細かく説明することで、安心して任せていただける関係を構築。しっかり状況を共有すると修理にかかる期間なども理解していただけるため、クレームを発生させることなくスムーズな故障対応ができています。日々のていねいな対応により、故障対応の際は指名していただくことも多く、長期的な利用促進に貢献しています', '御社は自動車整備士業界の中でもまだ新しく、挑戦できる環境だと思い志望しました。自動車業界自体、年齢層も高く若手の意見が取り入れい現状を感じており、御社であれば風通しもよく、私の意見も聞いて頂ける環境と関しています。', '2022-09-01 01:52:42', NULL),
(16, 19, 11, '私は学生生活の頃よりサッカー部に長く所属しており、現在でも10代の頃と変わらない体力を維持しようと、運動を続けています。\r\n    その継続力を生かして、今後の社会人人生も長く根気強く豊かに過ごしていきたいと考えております。', 'お客様への柔軟な対応が可能であり、世界中に拠点を持つ貴社で、人々の生活を支えたいと考えたからです。\r\n現在、国際物流は消費者が遠く離れた土地にあるモノを簡単に手に入れることを可能にし、このグローバル社会に不可欠な存在となっています。\r\nこうしたサービスインフラが仮に消滅したとすれば、世界中の人々が不便な生活を強いられます。\r\nそのため、物流が世界にもたらすことができる価値は非常に高いと考え、物流業界に魅力を感じました。', '2022-09-04 00:46:08', NULL),
(17, 1, 15, 'ffffffffffffffffffffffffff', 'fffffffffffffffffffffffffff', '2022-09-04 01:05:28', NULL),
(18, 1, 15, 'ggggggggggggg', 'ggggggggggggggggggggg', '2022-09-04 01:10:47', NULL),
(19, 1, 15, 'dddddddddddddddd', 'ddddddddddddddd', '2022-09-04 01:12:02', NULL),
(20, 1, 15, 'dddddddddddddddd', 'dddddddddddddddddddd', '2022-09-04 01:15:08', NULL),
(21, 1, 15, 'ffffffffffffffff', 'ffffffffffffffffff', '2022-09-04 01:16:39', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_08_21_172838_create_admin_table', 2),
(5, '2022_08_21_190352_create_companies_table', 3),
(6, '2022_08_22_181614_create_user_tokens_table', 4),
(7, '2022_08_26_105211_add_soft_delete_to_companies_table', 5),
(8, '2022_08_28_190901_create_applys_table', 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kana` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=admin 1=users',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `kana`, `email`, `password`, `tel`, `age`, `gender`, `area`, `type`, `role`, `created_at`, `updated_at`) VALUES
(1, '廣川 陽子', 'ヤマダタロウ', 'ny.0503@outlook.jp', '$2y$10$bEKHlujUsm17Zmiknw4.W.lymAp61vemJqOBmClU/lerVtu9JsxVC', '0630-227-322', '31', '女', '愛知県', 'コントローラー', '1', '2022-08-20 16:09:57', '2022-09-03 14:26:17'),
(7, '望月勇輝', 'モチヅキユウキ', 'naoki.fujimoto@example.net', '$2y$10$hgswJOkn3kDiWqMbw5fAQu9ma19rSADwWRXGM9rrZrgptTnn5ZU1.', '09056789999', '31', '男', '岡山県', 'コントローラー', '1', '2022-08-25 03:19:37', '2022-08-26 09:21:03'),
(19, '望月勇輝', 'モチヅキユウキ', 'mochi.yuki0129@gmail.com', '$2y$10$mFI088Ud7nO0tkmcyYAEzeLC3uyeYmELOXRv0UA.vA1/VaKhryPme', '09056789999', '31', '男', '山梨県', 'コントローラー', '1', NULL, '2022-09-04 00:44:23');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='ユーザートークン';

--
-- テーブルのデータのダンプ `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `token`, `expire_at`, `created_at`, `updated_at`) VALUES
(2, 1, '61052460663135d8ac2cf68.86163992', '2022-09-05 22:58:34', '2022-08-23 09:29:56', '2022-09-03 13:58:34'),
(3, 7, '70001739763088eb500de68.16170806', '2022-08-28 18:13:25', '2022-08-26 07:25:18', '2022-08-26 09:13:25'),
(9, 19, '6130701976313f4cd4102e1.41915988', '2022-09-06 09:43:57', '2022-09-04 00:43:57', '2022-09-04 00:43:57');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `company_user`
--
ALTER TABLE `company_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `user_id` (`user_id`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- テーブルのインデックス `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_tokens_token_unique` (`token`),
  ADD KEY `user_tokens_user_id_foreign` (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `company_user`
--
ALTER TABLE `company_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- テーブルの AUTO_INCREMENT `user_tokens`
--
ALTER TABLE `user_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `company_user`
--
ALTER TABLE `company_user`
  ADD CONSTRAINT `company_user_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `company_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
