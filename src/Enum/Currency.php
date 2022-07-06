<?php

declare(strict_types=1);


namespace Yivoff\Redsys\Enum;


enum Currency: int
{

    case DolarUSAUsd = 840;

    case LekAll = 8;

    case AlgerianDinarDzd = 12;

    case AngolaKwanzaAok = 24;

    case ProbandoDesaMon = 30;

    case AzerbaijanianManatAzm = 31;

    case ArgentineAustralArp = 32;

    case AustralianDollarAud = 36;

    case BahamianDollarBsd = 44;

    case BahrainiDinarBhd = 48;

    case TakaBdt = 50;

    case ArmenianDramAmd = 51;

    case BarbadosDollarBbd = 52;

    case BermudanDollarBmd = 60;

    case NgultrumBtn = 64;

    case BolivianPesoBop = 68;

    case DinarBad = 70;

    case PulaBwp = 72;

    case CruzeiroBrc = 76;

    case BelizeDollar084 = 84;

    case SolomonIslandsDollSbd = 90;

    case BruneiDollarBnd = 96;

    case LevBgl = 100;

    case KyatBuk = 104;

    case BurundiFrancBif = 108;

    case BelarussianRubleByb = 112;

    case RielKhr = 116;

    case CanadianDollarCad = 124;

    case CapeVerdeEscudoCve = 132;

    case CaymanIslandsDollaKyd = 136;

    case SriLankaRupeeLkr = 144;

    case ChileanPesoClp = 152;

    case YuanRenminbiCny = 156;

    case ChineseRenmimbiCnh = 157;

    case ChineseRenminbiCnx = 158;

    case ColombianPesoCop = 170;

    case ComorosFrancKmf = 174;

    case ZaireZrz = 180;

    case CostaRicaColonCrc = 188;

    case CroatianKunaHrk = 191;

    case CubanPesoCup = 192;

    case CyprusPoundCyp = 196;

    case KorunaCsk = 200;

    case CzechKorunaCzk = 203;

    case DanishKroneDkk = 208;

    case DominicanPesoDop = 214;

    case SucreEcs = 218;

    case ElSalvadorColonSvc = 222;

    case EkweleGqe = 226;

    case EthiopianBirrEtb = 230;

    case EritreanNaktanErn = 232;

    case EstonianKroonEek = 233;

    case FalklandIslandsFkp = 238;

    case FijiDollarFjd = 242;

    case DjiboutiFrancDjf = 262;

    case GeorgianLariGel = 268;

    case DalasiGmd = 270;

    case MarkDerDdrDdm = 278;

    case GhanaCediGhc = 288;

    case GibraltarPoundGip = 292;

    case QuetzalGtq = 320;

    case SyliGns = 324;

    case GuyanaDollarGyd = 328;

    case GourdeHtg = 332;

    case LempiraHnl = 340;

    case HongKongDollarHkd = 344;

    case ForintHuf = 348;

    case IcelandKronaIsk = 352;

    case IndianRupeeInr = 356;

    case RupiahIdr = 360;

    case IranialRialIrr = 364;

    case IranianAirlineRateIra = 365;

    case IraqiDinarIqd = 368;

    case IsraelShekelIls = 376;

    case JamaicanDollarJmd = 388;

    case YenJpy = 392;

    case TengeKzt = 398;

    case JordanianDinarJod = 400;

    case KenyanShillingKes = 404;

    case NorthKoreanWonKpw = 408;

    case KoreanWonKrw = 410;

    case KuwaitiDinarKwd = 414;

    case KyrgyzstanSonKgs = 417;

    case KipLak = 418;

    case LebanesePoundLbp = 422;

    case LesothoLotiLsm = 426;

    case LatvianLatLvl = 428;

    case LiberianDollarLrd = 430;

    case LibyanDinarLyd = 434;

    case LithuanianLitasLtl = 440;

    case PatacaMop = 446;

    case MalagasyFrancMgf = 450;

    case MalawiKwachaMwk = 454;

    case MalasyanRinggitMyr = 458;

    case MaldiveRupeeMvr = 462;

    case MaliMlf = 466;

    case MalteseLiraMtl = 470;

    case OuguiyaMro = 478;

    case MauritiusRupeeMur = 480;

    case MexicanPesoMxp = 484;

    case TugrikMnt = 496;

    case MoldovianLeuMdl = 498;

    case MorrocanDirhamMad = 504;

    case MeticalMzm = 508;

    case RialOmaniOmr = 512;

    case NamibianDollarNad = 516;

    case NepaleseRupeeNpr = 524;

    case NetherlandsAntilliaAng = 532;

    case ArubaAwg = 533;

    case YugoslavianNewDianNtz = 536;

    case VanuatuVatuVuv = 548;

    case NewZealandDollarNzd = 554;

    case Naira566 = 556;

    case CordobaNic = 558;

    case NairaNgn = 566;

    case NorwegianKroneNok = 578;

    case PacificIslandPci = 582;

    case PakistanRupeePkr = 586;

    case BalboaPab = 590;

    case KinaPgk = 598;

    case GuaraniPyg = 600;

    case PeruIntiPei = 604;

    case PhilippinePesoPhp = 608;

    case ZlotyPlz = 616;

    case Guinea = 624;

    case TimorEscudoTpe = 626;

    case QatariRialQar = 634;

    case LeuRol = 642;

    case RussianRoubleRub = 643;

    case RwandaFrancRwf = 646;

    case StHelenaPoundShp = 654;

    case DobraStd = 678;

    case SaudiRiyalSar = 682;

    case SeychellesRupeeScr = 690;

    case LeoneSll = 694;

    case SingaporeDollarSgd = 702;

    case SlovakKorunaSkk = 703;

    case DongVnd = 704;

    case SlovenianTolarSit = 705;

    case SomaliShillingSos = 706;

    case RandZar = 710;

    case ZimbabweDollarZwd = 716;

    case YemeniDinarYdd = 720;

    case SouthSudanesePoundSsp = 728;

    case SudanesePoundSdp = 736;

    case SudanAirlinesSda = 737;

    case SurinamGuilderSrg = 740;

    case LilangeniSzl = 748;

    case SwedishKronaSek = 752;

    case SwissFrancChf = 756;

    case SyrianPoundSyp = 760;

    case TajikRubleTjr = 762;

    case BahtThb = 764;

    case PaAngaTop = 776;

    case TrinidadYTobagoDoTtd = 780;

    case UaeDirhamAed = 784;

    case TunisianDinarTnd = 788;

    case TurkishLiraTrl = 792;

    case PseudoTurkishLiraPtl = 793;

    case ManatTmm = 795;

    case UgandaShillingUgs = 800;

    case KarbovanetUak = 804;

    case MacedonianDenarMkd = 807;

    case RussianRoubleRur = 810;

    case EgyptianPoundEgp = 818;

    case PoundSterlingGbp = 826;

    case TanzanianShillingTzs = 834;

    case UruguayanPesoUyp = 858;

    case UzbekistanSumUzs = 860;

    case BolivarVeb = 862;

    case TalaWst = 882;

    case YeminiRialYer = 886;

    case NewYugoslavianDollYud = 890;

    case NewDinarYug = 891;

    case KwachaZmk = 894;

    case NewTaiwanDollarTwd = 901;

    case NewManatTmt = 934;

    case GhanaCediGhs = 936;

    case DinarSerbioRsd = 941;

    case MozambiqueMeticalMzn = 943;

    case AzerbaijanianManatAzn = 944;

    case NewLeuRon = 946;

    case TurkishLiraTry = 949;

    case CfaFrancBeacXaf = 950;

    case EastCaribbeanDollaXcd = 951;

    case CfaFrancBceaoXof = 952;

    case CfpFrancXpf = 953;

    case ECUEuropeanCurXeu = 954;

    case KwachaZmw = 967;

    case SurinameDollarSrd = 968;

    case AriaryMga = 969;

    case AfghanistanAfghaniAfn = 971;

    case TajikistanSomoniTjs = 972;

    case KwanzaAngolaAoa = 973;

    case BelarussianRubleByr = 974;

    case NewLevBgn = 975;

    case FrancoDelCongoCdf = 976;

    case BosnianMarkaBam = 977;

    case EuroEur = 978;

    case HryvniaUah = 980;

    case GeorgianLariGel2 = 981;

    case NewPolishZlotyPln = 985;

    case BrazilianRealBrl = 986;

    case RandFinancierZal = 991;
}
