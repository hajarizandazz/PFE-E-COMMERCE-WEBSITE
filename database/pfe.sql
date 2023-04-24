-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 avr. 2023 à 12:50
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `admis`
--

CREATE TABLE `admis` (
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admis`
--

INSERT INTO `admis` (`nom`, `adresse`, `email`, `pass`) VALUES
('admin', 'oujda', 'admin@gmail.com', 'qwe');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_produit` int(100) NOT NULL,
  `nom_produit` varchar(100) NOT NULL,
  `prix_produit` int(100) NOT NULL,
  `quantite_produit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id_produit`, `nom_produit`, `prix_produit`, `quantite_produit`) VALUES
(4, 'Calcium Magnesium ', 25, 2),
(5, 'Vitamin C Facial Serum ', 11, 1),
(6, 'Acide hyaluronique', 12, 2),
(18, 'La biotine', 23, 3),
(20, 'La Spiruline', 56, 3);

-- --------------------------------------------------------

--
-- Structure de la table `productes`
--

CREATE TABLE `productes` (
  `id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `product_description` varchar(5000) NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `productes`
--

INSERT INTO `productes` (`id`, `Name`, `price`, `details`, `img`, `product_description`, `categorie`) VALUES
(1, 'caudali premier cru', '13', 'Premier Cru Global Anti-Aging Cream est une crème de soin de la peau haut de gamme qui vise à réduire les signes visibles du vieillissement de la peau. Elle est fabriquée par la marque française de cosmétiques Caudalie, qui est connue pour utiliser des ingrédients naturels et efficaces dans ses produits.', 'img/caudali pr.jpg', 'Pour de meilleurs résultats, utilisez la crème Premier Cru Global Anti-Aging Cream deux fois par jour, matin et soir, après le nettoyage de la peau. Si vous avez une peau très sèche, vous pouvez également utiliser un hydratant supplémentaire après avoir appliqué la crème.', 'beauty'),
(2, 'caudali vinergetic', '50', 'Vine[Activ] Instant Detox Mask est un masque facial nettoyant et purifiant de la marque française de soins de la peau Caudalie. Ce masque est conçu pour aider à nettoyer en profondeur les pores de la peau, éliminer les impuretés et les toxines, tout en revitalisant et en rafraîchissant la peau.', 'img/viner.jpg', 'Il est recommandé d\'utiliser le masque une à deux fois par semaine, en fonction des besoins de votre peau. Il est important de ne pas laisser le masque plus longtemps que recommandé, car cela peut irriter votre peau. Si vous avez la peau sensible, il est conseillé de faire un test de patch avant d\'utiliser le masque pour la première fois.', 'beauty'),
(3, 'vinopure stop', '23', 'Vinopure Stop Pimples Salicylic est un produit anti-acné de la marque française de soins de la peau Caudalie. Ce produit est conçu pour aider à réduire l\'apparence des imperfections, des boutons et des points noirs, tout en purifiant et en apaisant la peau.', 'img/vino.jpg', 'Il est important de ne pas utiliser le produit sur une peau irritée ou endommagée. Il est également recommandé d\'utiliser une protection solaire en cas d\'exposition prolongée au soleil, car l\'acide salicylique peut augmenter la sensibilité de la peau aux rayons UV. Si vous avez la peau sensible, il est conseillé de faire un test de patch avant d\'utiliser le produit pour la première fois.', 'beauty'),
(4, 'Calcium Magnesium ', '25', 'Ces comprimés de calcium-magnésium de Scitec Nutrition sont un moyen facile de vous assurer d\'atteindre la quantité quotidienne recommandée de calcium et de magnésium. Le calcium et la magnésium sont essentield pour tous les êtres vivants ce sont les minéraux les plus abondants dans le corps humain. Ils soutiennent un large éventail de fonctions vitales du corps - y compris le métabolisme , la digestion, neurotransmissions et la fonction musculaire. Le corps a également besoin de calcium pour maintenir des os et des dents sains. Le magnésium réduit également la fatigue et la fatigue, de sorte que vous êtes toujours alerte et prêt à vous entraîner. Calcium Magnesium de scitec est un excellent ajout pour quiconque poursuit un objectif de remise en forme.Ensemble, le calcium et le magnésium aideront votre corps à répondre aux exigences de votre mode de vie actif. Les comprimés de calcium-magnésium de Scitec Nutrition conviennent à tous ceux qui souhaitent un regain de ces minéraux. Étant donné que ces comprimés sont entièrement végétaliens, ils sont idéaux pour les personnes suivant un mode de vie végétal. Ils conviennent également à toute personne suivant un régime sans gluten, ainsi qu\'aux personnes qui souhaitent augmenter leur apport en vitamines sans calories supplémentaires.', 'img/photo9.jpg', 'Mode d’utilisation pour calcium magnésium scitec nutrition : Prendre 1 comprimé par jour de préférence avec un repas.', 'vitamin'),
(5, 'Vitamin C Facial Serum ', '11', 'VITAMIN C IS AN INDISPENSABLE NUTRIENT FOR COLLAGEN production, vitamin C synergistically blends with Botanical Hyaluronic Acid and Vitamin E, which is designed to target the most common signs of aging including, firmness, fine lines, wrinkles, dark spots & sun spots.\r\nPLANT BASED FORMULATION - No added fragrances, parabens, phthalates, GMOs. our Vitamin C Serum helps smooth, hydrate, and plump your skin with only 2 or 3 drops needed to cover your entire face, offering refreshing support to your skin as you age.\r\nLoaded with antioxidants, our Vitamin C Serum helps protect against UV rays while repairing sun-damaged skin. Hyaluronic Acid deeply hydrates and plumps the skin instantly hydrating, replenishing, and boosting the skin\'s ability to retain moisture, revealing a smoother youthful complexion.\r\nEFFECTIVE TREATMENT our MSM is known to treat stubborn skin conditions like acne, eczema, psoriasis, dandruff, rosacea, warts, dry skin, and fine lines + wrinkles. Known as \"Nature\'s Beauty Mineral\" for Clear, Soft & Smooth skin, May reduce fine lines and wrinkles, Restores collagen production and Acne improvement', 'img/photo5.jpg', '✔ We develop products around ingredients that have been verified in multiple papers.\r\n✔ We use beneficial raw materials to ensure our products offer the highest effects. We do not use any harmful or suspected harmful ingredients.\r\n✔ We conduct countless types of research and experiments with active ingredients until we get the best effects.\r\n✔ We want to remove all unnecessary costs in the production and distribution process so we can sell our products at a reasonable price.\r\n✔ We offer a variety of solutions for many different skin types.', 'vitamin'),
(6, 'Acide hyaluronique', '12', 'Nutrimea a formulé pour vous un complément alimentaire à base d\'acide hyaluronique et de collagène, avec de la vitamine A, de la vitamine C et du sélénium. Le sélénium contribue au maintien de cheveux et d\'ongles normaux, et contribue à protéger les cellules contre le stress oxydatif. La vitamine A contribue au maintien d\'une peau normale La vitamine C contribue à la formation de collagène, pour assurer la fonction normale de la peau. Elle contribue aussi à protéger les cellules contre le stress oxydatif. L\'acide hyaluronique est une molécule retrouvée naturellement dans les tissus conjonctifs comme les articulations et la peau. Elle est l’un des principaux constituants du derme de la peau où elle retient l\'eau dans les tissus.', 'img/photo0.jpg', 'Prendre 2 gélules par jour (1 au repas midi et 1 au repas du soir), avec un verre d’eau Précautions d\'emploi : Les compléments alimentaires doivent être utilisés dans le cadre d\'un mode de vie sain et ne pas être utilisés comme substituts d\'un régime alimentaire varié et équilibré Ne pas dépasser la dose journalière indiquée Les femmes enceintes et allaitantes doivent demander conseils auprès de leur professionnel de santé avant toute complémentation Tenir hors de la portée des jeunes enfants Conserver dans un endroit frais, sec et à l\'abri de la lumière Les effets induits par la prise de ce complément peuvent varier d\'une personne à l\'autre Ce produit n\'est pas destiné à diagnostiquer, traiter, soigner ou prévenir une quelconque maladie. Ces informations ne constituent pas un avis médical et ne doivent pas être considérées comme telles.', 'vitamin'),
(7, 'SPORTS PACKAGE Spirulina', '34', 'Le \"SPORTS PACKAGE Spirulina and Multivitamins\" est un complément alimentaire destiné aux sportifs et aux personnes actives qui cherchent à soutenir leur corps pendant l\'exercice physique. Il se compose de deux éléments principaux : la spiruline et les multivitamines.', 'img/spiri.jpg', 'Il est important de suivre les instructions sur l\'étiquette du produit ou les recommandations de votre professionnel de santé pour la posologie correcte. En général, il est recommandé de prendre le SPORTS PACKAGE Spirulina and Multivitamins une à trois fois par jour, selon les besoins individuels.\r\n\r\nIl est également important de noter que la spiruline peut causer des effets secondaires chez certaines personnes, tels que des nausées, des douleurs abdominales ou des réactions allergiques. Il est donc conseillé de consulter un professionnel de santé avant de prendre ce produit, en particulier si vous avez des allergies alimentaires ou des problèmes de santé préexistants.', 'sport-protein'),
(8, 'lactosérum', '10', 'Les protéines de lactosérum, également connues sous le nom de whey protéines, sont des compléments alimentaires populaires parmi les personnes qui cherchent à augmenter leur apport en protéines et à améliorer leur récupération après l\'exercice physique. Les whey protéines sont dérivées du lait et sont considérées comme une source de protéines complètes, car elles contiennent tous les acides aminés essentiels nécessaires à la construction et à la réparation des tissus musculaires.', 'img/lac.jpg', 'L\'utilisation du WHEY PROTÉINES PROTEIN POWDER dépendra des besoins individuels en protéines et de l\'objectif personnel. En général, il est recommandé de consommer le WHEY PROTÉINES PROTEIN POWDER après l\'exercice physique, pour aider à réparer les muscles endommagés et à favoriser la récupération musculaire.', 'sport-protein'),
(9, 'oméga-3 EPA', '19', 'Les oméga-3 EPA (acide eicosapentaénoïque) et DHA (acide docosahexaénoïque) sont des acides gras essentiels que l\'on trouve dans les poissons gras et d\'autres sources marines. Ils sont importants pour la santé cardiovasculaire, la fonction cérébrale et la santé des articulations, entre autres bienfaits.', 'img/om.jpg', 'L\'OMÉGA-3 EPA DHA ANTARCTIC KRILL est généralement pris sous forme de capsules. La dose recommandée peut varier en fonction des besoins individuels et des objectifs personnels, mais en général, une dose typique est d\'environ 1000 mg par jour. Il est important de suivre les instructions sur l\'emballage et de ne pas dépasser les doses recommandées, car une consommation excessive d\'acides gras oméga-3 peut entraîner des effets indésirables sur la santé.', 'sport-protein'),
(10, 'Multivitamins', '56', 'Multivitamins are dietary supplements that contain a combination of vitamins and minerals essential for overall health and wellness. They are designed to provide a convenient and efficient way to meet daily nutritional requirements.', 'img/multi.jpg', 'les multivitamines sont des compléments alimentaires qui sont généralement pris une fois par jour avec un repas. Il est important de suivre les instructions d\'utilisation du produit, qui peuvent varier en fonction de la marque et de la formulation.', 'sport-protein'),
(12, 'AMPK Metabolism Enhancer', '34', 'Le LIFE EXTENSION AMPK Metabolism Enhancer est un complément alimentaire qui aide à soutenir la santé métabolique en activant l\'AMPK, une enzyme qui joue un rôle important dans la régulation du métabolisme énergétique. L\'AMPK est une enzyme qui est activée lorsque les niveaux d\'énergie dans les cellules sont bas, comme pendant l\'exercice ou le jeûne, et qui stimule la production d\'ATP, la source d\'énergie des cellules.', 'img/ampk.jpg', 'Le LIFE EXTENSION AMPK Metabolism Enhancer est un complément alimentaire conçu pour aider à améliorer le métabolisme énergétique de l\'organisme en activant l\'enzyme AMPK (protéine kinase activée par l\'adénosine monophosphate). L\'AMPK joue un rôle clé dans la régulation de la production d\'énergie dans les cellules, et son activation peut aider à augmenter l\'utilisation des graisses comme source d\'énergie, réduire la production de glucose dans le foie et favoriser l\'absorption du glucose dans les cellules musculaires.', 'sport-protein'),
(13, 'L-Glutamine', '35', 'La L-Glutamine est un acide aminé non essentiel qui est présent dans de nombreux aliments, notamment la viande, le poisson, les légumes et les produits laitiers. La glutamine est nécessaire pour la synthèse des protéines et est importante pour la santé de l\'intestin, du système immunitaire et du cerveau.', 'img/lg.jpg', 'La supplémentation en L-glutamine peut aider à améliorer la récupération après l\'exercice, à réduire les douleurs musculaires et à renforcer le système immunitaire. Elle peut également aider à protéger la muqueuse intestinale, favoriser la digestion et aider à prévenir les ulcères gastriques. La dose recommandée est d\'environ 5 à 10 g par jour, à prendre de préférence avec un repas.', 'sport-protein'),
(14, 'L-Carnitine', '46', 'La L-Carnitine est un acide aminé qui joue un rôle important dans le métabolisme des graisses, en aidant à transporter les acides gras dans les cellules pour être brûlés comme énergie. La supplémentation en L-carnitine peut aider à améliorer la performance physique, à favoriser la perte de poids et à augmenter la capacité d\'endurance.', 'img/gar.jpg', 'La dose recommandée de L-carnitine est d\'environ 500 à 2000 mg par jour, à prendre de préférence avant l\'exercice physique. Il est important de noter que les effets de la L-carnitine sur la perte de poids peuvent être modestes, et qu\'elle doit être associée à une alimentation équilibrée et une activité physique régulière pour obtenir des résultats optimaux.', 'sport-protein'),
(15, 'collagène', '34', 'Le collagène est une protéine qui compose la peau, les cheveux, les ongles, les tendons et les ligaments. La supplémentation en collagène peut aider à renforcer ces tissus, améliorer la santé de la peau, des cheveux et des ongles, ainsi que favoriser la récupération après l\'exercice.', 'img/coll.jpg', 'Ancient Nutrition Multi Collagen Proteins est un supplément alimentaire qui contient différents types de collagène provenant de sources animales comme le bovin, le poulet et le poisson. Il peut être ajouté aux smoothies, aux boissons chaudes ou froides, ou utilisé pour préparer des recettes de cuisine. La dose recommandée est d\'environ 10 à 20 g par jour.', 'sport-protein'),
(16, 'VITAMIN C 100% L-ASCORBIC', '33', 'VITAMIN C 100% L-ASCORBIC ACID:\r\nLa vitamine C (acide ascorbique) est une vitamine essentielle soluble dans l\'eau qui agit comme un antioxydant et contribue à la fonction immunitaire normale, à la formation normale de collagène et à la protection des cellules contre le stress oxydatif. La forme 100% L-ascorbic acid est la forme la plus pure et la plus biodisponible de la vitamine C.', 'img/c.jpg', 'La vitamine C est couramment utilisée comme complément alimentaire pour soutenir la fonction immunitaire, aider à la cicatrisation des plaies et favoriser la production de collagène pour une peau, des os et des dents sains. Il est recommandé de prendre de la vitamine C régulièrement pour maintenir des niveaux optimaux dans l\'organisme.', 'vitamin'),
(17, 'vitamine D3', '10', 'La vitamine D3 est une vitamine liposoluble essentielle qui est souvent appelée «vitamine du soleil» car elle est produite par l\'exposition de la peau aux rayons UVB. Elle contribue à la santé osseuse, au système immunitaire, à la fonction musculaire et à l\'absorption normale du calcium et du phosphore.', 'img/d.jpg', 'La vitamine D3 est souvent utilisée comme complément alimentaire pour soutenir la santé osseuse, surtout chez les personnes ayant un apport alimentaire insuffisant ou une exposition solaire limitée. Il est recommandé de consulter un professionnel de la santé pour déterminer la dose appropriée de vitamine D3 pour chaque individu', 'vitamin'),
(18, 'La biotine', '23', 'La biotine, également connue sous le nom de vitamine B7, est une vitamine soluble dans l\'eau qui est importante pour la santé de la peau, des ongles et des cheveux, ainsi que pour le métabolisme des glucides, des protéines et des graisses. La forme enrichie en zinc et en sélénium fournit également des minéraux importants pour la santé globale.', 'img/bio.jpg', 'La biotine est souvent utilisée comme complément alimentaire pour soutenir la santé de la peau, des ongles et des cheveux. Il est également utilisé pour aider à maintenir une glycémie normale et soutenir la fonction nerveuse. Il est recommandé de prendre la biotine régulièrement pour maintenir des niveaux optimaux dans l\'organisme.', 'vitamin'),
(19, 'zinc', '45', 'Le zinc est un minéral essentiel qui est important pour la croissance et la réparation des tissus, la santé de la peau et du système immunitaire, ainsi que pour le métabolisme des glucides, des protéines et des graisses. La forme citrate est une forme hautement biodisponible de zinc.', 'img/z.jpg', 'Le zinc est souvent utilisé comme complément alimentaire pour soutenir la santé globale, en particulier pour la croissance et la réparation des tissus et la fonction immunitaire. Il peut également être utilisé pour aider à maintenir une peau saine et pour soutenir la santé reproductive masculine. Il est recommandé de prendre le zinc régulièrement pour maintenir des niveaux optimaux dans l\'organisme', 'vitamin'),
(20, 'La Spiruline', '56', 'La Spiruline est une algue bleue-verte qui est considérée comme l\'un des superaliments les plus nutritifs disponibles. Elle est riche en protéines, vitamines et minéraux essentiels tels que le fer, le calcium, le potassium, la vitamine B12 et la vitamine C. Elle est également une source importante d\'antioxydants et de phytonutriments qui soutiennent la santé globale du corps. La spiruline peut être consommée sous forme de poudre ou de comprimés.', 'img/sp.jpg', 'La spiruline est souvent consommée comme complément alimentaire, généralement en poudre ou en comprimés. Elle peut être ajoutée à des smoothies, des jus de fruits, des soupes ou des salades pour augmenter la teneur en nutriments de ces aliments.', 'vitamin'),
(21, 'Le charbon actif', '67', 'Le charbon actif est une forme de carbone qui est traitée pour avoir une surface poreuse, ce qui lui permet d\'absorber les toxines et les impuretés du corps. Il peut être fabriqué à partir de diverses sources, notamment de la coque de noix de coco, du bois et du charbon de bois.', 'img/ch.jpg', 'Le charbon actif est souvent utilisé comme traitement naturel pour les problèmes digestifs tels que les ballonnements et les flatulences. Il peut être pris sous forme de comprimés ou de capsules, ou ajouté à des boissons ou des aliments pour aider à éliminer les toxines du corps.', 'vitamin'),
(22, 'Vinergetic C+', '89', 'Vinergetic C+ est un sérum anti-fatigue à base de vitamine C développé par la marque Vinexpert. La vitamine C est un antioxydant puissant qui aide à protéger la peau contre les dommages causés par les radicaux libres et les rayons UV. Elle favorise également la production de collagène, qui est essentiel pour maintenir la fermeté et l\'élasticité de la peau.', 'img/ver.jpg', 'Pour utiliser le sérum Vinergetic C+, il est recommandé de l\'appliquer chaque matin sur une peau propre et sèche, avant d\'appliquer votre crème hydratante habituelle. Vous pouvez également l\'utiliser le soir, avant d\'aller vous coucher, pour une hydratation intensive pendant la nuit.', 'beauty'),
(23, 'VINEXPERT', '40', 'VINEXPERT est un complément alimentaire qui contient plusieurs ingrédients bénéfiques pour la santé, notamment de la vitamine C, de la vitamine E, du resvératrol, de la quercétine et de l\'extrait de pépins de raisin.', 'img/vinex.jpg', 'L\'utilisation recommandée de VINEXPERT est de prendre deux gélules par jour, de préférence pendant les repas. Cependant, il est important de lire attentivement les instructions et les avertissements figurant sur l\'emballage du produit avant de l\'utiliser. En cas de doute, il est recommandé de consulter un professionnel de santé avant de prendre des compléments alimentaires.', 'beauty'),
(24, 'Resveratrol', '60', 'Resveratrol Lift est une gamme de soins de la peau proposée par la marque Caudalie. Le Resveratrol Lift Soin Liftant Regard est un produit de cette gamme spécialement conçu pour raffermir et lisser la peau délicate autour des yeux. Il contient une combinaison de resvératrol de vigne, d\'acide hyaluronique et de peptides de riz, qui agissent ensemble pour réduire l\'apparence des rides et des ridules, raffermir la peau et réduire les poches et les cernes.', 'img/res.jpg', 'le Resveratrol Lift Soin Liftant Regard, il suffit d\'appliquer une petite quantité sur la peau nettoyée autour des yeux et de masser doucement jusqu\'à ce qu\'elle soit complètement absorbée. Il peut être utilisé le matin et/ou le soir. Il est recommandé de suivre ce produit avec un hydratant pour le visage pour des résultats optimaux.', 'beauty'),
(25, 'Vinosun Protect', '50', 'Vinosun Protect High Protection Sun Water est un produit de protection solaire de la marque française de soins de la peau Caudalie. Ce produit est conçu pour protéger efficacement la peau contre les rayons UV tout en offrant une sensation légère et hydratante.', 'img/pro.jpg', 'Vous pouvez utiliser ce sérum matin et soir, seul ou sous votre crème hydratante, selon les besoins de votre peau. Il est également recommandé d\'utiliser une protection solaire en cas d\'exposition prolongée au soleil, car le sérum ne contient pas de filtres solaires.', 'beauty'),
(26, 'DERCOS TECHNIQUE AMINEXIL', '100', 'DERCOS TECHNIQUE AMINEXIL CLINICAL 5 - HOMMES est un traitement anti-chute de cheveux pour les hommes. Il contient de l\'Aminexil, une molécule qui permet de réduire la rigidification du collagène autour de la racine du cheveu, ce qui aide à préserver l\'ancre du cheveu dans le cuir chevelu. Le traitement se présente sous forme de flacon à appliquer sur le cuir chevelu sec ou humide, en massant délicatement pour favoriser la pénétration de la lotion.', 'img/der.jpg', 'DERCOS TECHNIQUE AMINEXIL CLINICAL 5 - HOMMES est un traitement capillaire destiné aux hommes qui souffrent de perte de cheveux légère à modérée. Il est formulé avec de l\'Aminexil, un ingrédient actif qui aide à prévenir la rigidification du collagène, un facteur qui peut entraîner la chute des cheveux. Ce traitement peut aider à renforcer les cheveux existants et à favoriser la croissance de nouveaux cheveux.', 'beauty'),
(27, 'SUN PROTECTION', '99', 'Le produit SUN PROTECTION SUN PHOTOAGING TINTED SPF 50+ de DERCOS TECHNIQUE est une protection solaire teintée pour le visage. Elle contient un système de filtres UV à large spectre pour protéger la peau des rayons UVA et UVB, ainsi que des antioxydants pour prévenir les dommages causés par les radicaux libres. La formule teintée offre une couvrance légère pour unifier le teint et masquer les imperfections. Elle convient aux peaux sensibles et peut être utilisée tous les jours avant l\'exposition au soleil. Il est important de réappliquer le produit toutes les 2 heures pour maintenir une protection efficace.', 'img/sun.jpg', 'RODUCTS SUN PROTECTION SUN PHOTOAGING TINTED SPF 50+ est une crème solaire teintée avec un facteur de protection solaire élevé (SPF) de 50+. Il offre une protection efficace contre les rayons UVB et UVA, qui peuvent causer des dommages à la peau, tels que le vieillissement prématuré, les taches de vieillesse et même le cancer de la peau. La formule teintée peut également aider à camoufler les imperfections et à unifier le teint, ce qui en fait une excellente option pour une utilisation quotidienne sous le maquillage.', 'beauty'),
(29, 'Sport Whey Protein', '400', 'Certified Grass Fed Whey is designed to refuel and repair muscles. Intensive training and exercise breaks down muscle tissue and then the body repairs and rebuilds to make them stronger. Our premium quality, clean Certified Grass Fed Whey is not only free of hormones and antibiotics, but we are also very proud to have the only Non- GMO Project Verified Whey. Due to these third-party certifications, Certified Grass Fed Whey is also NSF Certified for Sport and Informed-Choice for Sport Certified. You can rest assured there are no athletic banned substances in this clean whey protein. For Garden of Life to launch an animal protein, the entire system had to be different from other “so-called grass fed” protein. We needed a holistic approach to our protein that started at the farm and traced every metric straight through to the tub. Although many whey protein products may call themselves “grass fed,” our research showed this wasn’t truly the case. Almost all dairy farms still used animal feed full of soy, corn and GMOs. Why? Typically, there are too many cows to feed year-round on grass. Our search ultimately ended in Ireland with a coop of 4,800 generational family farmers whose herds feed only in green pastures.', 'img/w.jpg', 'CLEAN WHEY PROTEIN: Truly Grass Fed Certified, Non GMO Project Verified, Gluten free, Soy free, NSF Certified for Sport and Informed Choice for Sport Certified, with No added hormones, No antibiotics, No added sugars\r\nPOST WORKOUT RECOVERY: Our Garden of Life Sports Whey Protein Isolate helps you refuels & repair muscles after a hard workout with 24g Grass Fed Whey, 4g Glutamine and over 6g BCAA amino acids\r\nIMMUNE SYSTEM SUPPORT: This protein shake supports your immune system during a taxing training regimen or dieting cycle; rBST, rBGH and antibiotic free, un-denatured, cold-processed, micro-filtered, Non-GMO Project Verified and BSE free\r\nVANILLA PROTEIN POWDER: Our whey isolate protein powder helps reduce recovery time after a workout, helping you get back to training faster\r\nPROTEIN FOR A LEAN BODY: This protein powder for men and women can be used within an hour after a workout or throughout the day to combat hunger and improve satiety', 'sport-protein');

-- --------------------------------------------------------

--
-- Structure de la table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `email`, `age`, `password`) VALUES
(4, 'reda', 'aa', 'gah@gmail.com', 12, '1234'),
(5, 'oussama', 'oujda', 'ouss@gmail.com', 22, '123'),
(6, 'rdf', 'oujda', 'rer@gmail.com', 12, 'reda'),
(7, 'halid', 'ddd', 'ddddd@gmail.com', 22, 'rt'),
(8, 'dai', 'oujda', 'dai@gmail.com', 22, 'dai'),
(9, 'qwer', 'oujda', 'llllmmm498@gmail.com', 23, '1234'),
(10, 'EST', 'rrr', 'erer@gmail.com', 23, '$2y$10$MQwLsqUeZ3kjukGZjQFKZOcDwxjEgzn.euSnMis57ixevFRoe5Dxm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `productes`
--
ALTER TABLE `productes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_produit` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `productes`
--
ALTER TABLE `productes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
