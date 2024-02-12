<?php
declare(strict_types=1);

const NULL_DOI_ANNOYING = // TODO - manually check these from time to time
array(
'10.1511/2006.61.412',
'10.2225/vol9-issue3-fulltext-15',
'10.31754/2409-6105-2019-4-9-18',
'10.2136/sh2012-53-6-lf',
'10.4435/BSPI.2015.1',
'10.4435/BSPI.2017.08',
'10.4435/BSPI.2017.19',
'10.4435/BSPI.2018.11',
'10.4103/0975-8844.103507',
'10.1515/vzoo-2017-0029',
'10.5852/cr-palevol2022v21a20',
'10.5852/cr-palevol2022v21a23',
'10.5852/cr-palevol2022v21a38',
'10.5852/cr-palevol2022v21a41',
'10.5852/cr-palevol2022v21a6',
'10.5852/cr-palevol2023v22a23',
);
const NULL_DOI_LIST =
array(
 /** Double check before removing - for example, these are liars - see NULL_DOI_ANNOYING above **/
'10.1511/2006.61.412', // goes to wrong page
'10.2225/vol9-issue3-fulltext-15', // "Forbid"
'10.31754/2409-6105-2019-4-9-18', // Nothing page
'10.2136/sh2012-53-6-lf', // published landing page
'10.4435/BSPI.2015.1', // spam site
'10.4435/BSPI.2017.08',
'10.4435/BSPI.2017.19',
'10.4435/BSPI.2018.11',
'10.4103/0975-8844.103507',
'10.1515/vzoo-2017-0029',
'10.5852/cr-palevol2022v21a20',
'10.5852/cr-palevol2022v21a23',
'10.5852/cr-palevol2022v21a38',
'10.5852/cr-palevol2022v21a41',
'10.5852/cr-palevol2022v21a6',
'10.5852/cr-palevol2023v22a23',
/** end annoying **/
'10.1001/jama.275.17.1339',
'10.1007/BF00162691',
'10.1007/BF00162818',
'10.1007/BF00182435',
'10.1007/BF00190980',
'10.1007/BF00202951',
'10.1007/s10783-007-9033-2',
'10.1017/CBO9780511607141',
'10.1017/cbo9780511610486.005',
'10.1017/cbo9781139696562.001',
'10.1023/A:1004047600718',
'10.1023/A:1017936319069',
'10.1023/A:1021366131934',
'10.1036/0071422803',
'10.1038/npre.2012.7041',
'10.1042/csb0001011',
'10.1068/p2952',
'10.1080/10503309912331332801',
'10.1093/cq/54.2.630',
'10.1093/ml/21.2.143',
'10.1093/phr/115.1.12',
'10.1093/phr/115.2.191',
'10.1106/X21V-YQKU-PMKP-XGTP',
'10.11157/rsrr1-1-10',
'10.11157/rsrr1-2-412',
'10.11160/bah.79',
'10.1128/jmbe.v11.i1.154',
'10.1136/vr.103.4.64',
'10.1136/vr.118.9.251-b',
'10.1136/vr.123.6.142',
'10.1136/vr.136.14.350',
'10.1136/vr.83.20.528-a',
'10.1136/vr.90.3.53',
'10.1137/1.9780898719512.ch1',
'10.1177/026635549100900202',
'10.1177/0583102405059054',
'10.1177/104239159100300102',
'10.1177/14634990122228638',
'10.1177/154596839701100104',
'10.1215/lt-18350307-TC-JFR-01',
'10.1225/F00503',
'10.1258/j.jmb.2005.04-49',
'10.12744/ijnpt.2017.1.0002-0010',
'10.12788/ajo.2018.0018',
'10.13176/11.106',
'10.1336/0313268762',
'10.1360/982005-575',
'10.1360/aps050082',
'10.1379/1466-1268(2000)005<0098:mhdhco>2.0.co;2',
'10.1379/1466-1268(2001)006<0377:goapao>2.0.co;2',
'10.1379/1466-1268(2001)006<0377:GOAPAO>2.0.CO;2',
'10.1385/1-59745-395-1:163',
'10.1385/NMM:8:1-2:217',
'10.14203/mri.v24i0.400',
'10.14240/jmhs.v2i3.32',
'10.14240/jmhs.v5i1.81',
'10.14334/wartazoa.v27i4.1692',
'10.14429/dsj.33.6188',
'10.14429/dsj.53.2282',
'10.14429/dsj.60.344',
'10.14496/dia.7104343513.14',
'10.1489/1544-581X(2004)072<0169:LOLSTP>2.0.CO;2',
'10.15026/57434',
'10.1515/crll.1878.84.242',
'10.1525/fq.1955.9.3.04a00070',
'10.1525/fq.1962.15.4.04a00060',
'10.1525/fq.1972.26.1.04a00030',
'10.1525/jps.1975.5.1-2.00p0373x',
'10.1525/ncl.1955.9.4.99p02537',
'10.15366/secuencias2018.48.001',
'10.15421/201683',
'10.1560/1blk-b1rt-xb11-bwjh',
'10.1560/1BLK-B1RT-XB11-BWJH',
'10.1560/71EQ-CNDF-K3MQ-XYTA',
'10.1560/DJXH-QX0M-5P0H-DLMW',
'10.1560/H0A3-JJBU-RX53-WMXJ',
'10.1560/IJES.56.2-4.217',
'10.1560/IJPS_54_3_169',
'10.1560/IJPS.55.1.1',
'10.1560/IJPS.55.3-4.207',
'10.1560/IJPS.56.1-2.1',
'10.1560/IJPS.56.4.341',
'10.1560/IJPS.56.4.341',
'10.1560/IJPS.57.1-2.103',
'10.1560/IJPS.57.1-2.103',
'10.1560/IJPS.57.1-2.35',
'10.1560/IJPS.57.4.303',
'10.1560/IJPS.57.4.329',
'10.1560/IJPS.57.4.329',
'10.1560/IJPS.60.1-2.65',
'10.1560/rrj4-hu15-8bfm-wauk',
'10.17122/ogbus-2017-6-6-19',
'10.17159/2413-3051/2013/v24i3a3138',
'10.17312/harringtonparkpress/2014.09.msws.007',
'10.17312/harringtonparkpress/2014.09.msws.010',
'10.17402/205',
'10.17694/bajece.06954',
'10.17795/bhs-35330',
'10.17851/2358-9787.26.3.75-100',
'10.18052/www.scipress.com/ILSHS.53.60',
'10.18226/21789061.v11i2p400',
'10.18282/amor.v2.i4.58',
'10.18520/cs/v110/i6/996-999',
'10.18520/cs/v112/i01/52-61',
'10.18551/issn1997-0749.2014-06',
'10.18809/jbms.2015.0111',
'10.18809/jbms.2016.0108',
'10.19137/qs.v19i1.963',
'10.20960/nh.27',
'10.20960/nh.559',
'10.21040/eom/2016.2.7',
'10.21082/blpn.v12n2.2006.p83-88',
'10.21154/justicia.v12i2.328',
'10.21599/atjir.15384',
'10.22251/jlcci.2020.20.6.835',
'10.22353/mjbs.2004.02.13',
'10.22520/tubaked.2004-2.0007',
'10.2307/3818115',
'10.2307/jthought.43.1-2.55',
'10.23918/vesal2019.a7',
'10.24109/2176-6681.rbep.81i198.946',
'10.24115/S2446-6220202173A1397p.245-252',
'10.24321/0019.5138.201906',
'10.2466/PMS.99.7.1239-1242',
'10.2466/PR0.67.5.35-42',
'10.2466/PR0.69.8.1139-1146',
'10.2466/pr0.71.8.1064-1066',
'10.2466/PR0.85.5.67-77',
'10.2466/PR0.96.4.1015-1021',
'10.26442/terarkh2018901089-93',
'10.26628/ps.v90i5.917',
'10.2979/NWS.1997.9.2.193',
'10.2979/NWS.1998.10.1.79',
'10.2979/NWS.1998.10.3.224',
'10.2979/NWS.1999.11.1.118',
'10.2979/NWS.2000.12.1.84',
'10.2979/NWS.2002.14.2.18',
'10.2979/NWS.2003.15.3.145',
'10.2979/NWS.2006.18.2.24',
'10.30699/pjas.2.6.53',
'10.31096/wua033-pls90b070',
'10.3134/ehtj.09.001',
'10.31421/IJHS/12/1/622',
'10.3149/csm.0302.160',
'10.3149/CSM.0401.63',
'10.3149/CSM.0502.179',
'10.3149/jmh.0301.1',
'10.3149/jmh.0701.59',
'10.3149/jmh.0801.41',
'10.3149/jmh.0803.254',
'10.3149/jmh.1002.153',
'10.3149/jms.0703.353',
'10.3149/jms.0703.391',
'10.3149/jms.0802.213',
'10.3149/jms.0803.419',
'10.3149/jms.0902.183',
'10.3149/jms.0902.205',
'10.3149/jms.0902.205',
'10.3149/jms.1002.209',
'10.3149/jms.1003.361',
'10.3149/jms.1201.25',
'10.3149/jms.1202.103',
'10.3149/jms.1203.173',
'10.3149/jms.1402.145',
'10.3149/jms.1402.191',
'10.3149/jms.1502.120',
'10.3149/jms.1602.124',
'10.3149/jms.1703.210',
'10.3149/jms.1801.63',
'10.3149/jms.1802.179',
'10.3149/jms.1803.218',
'10.3149/jms.1803.238',
'10.3149/jms.1901.37',
'10.3149/jms.2001.16',
'10.3149/jms.2003.179',
'10.3149/jms.2003.243',
'10.3149/jms.2101.24',
'10.3149/jms.2102.127',
'10.3149/jms.2102.206',
'10.3149/jms.2201.53',
'10.3149/jms.2201.64',
'10.3149/jms.2203.222',
'10.31646/wa.252',
'10.3232/REB.2017.V4.N8.3069',
'10.3320/1.2759009',
'10.3347/kjp.2001.39.3.209',
'10.3347/kjp.2007.45.2.95',
'10.3347/kjp.2009.47.1.73',
'10.3347/kjp.2009.47.S.S115',
'10.3347/kjp.2009.47.S.S69',
'10.3347/kjp.2010.48.3.253',
'10.3347/kjp.2013.51.1.31',
'10.3347/kjp.2014.52.2.183',
'10.3347/kjp.2018.56.5.463',
'10.3347/kjp.2020.58.4.343',
'10.3347/kjp.2021.59.1.35',
'10.36076/ppj.2018.5.E573',
'10.36251/josi.136',
'10.36251/josi.40',
'10.3724/SP.J.1245.2011.00001',
'10.3828/978-0-85323-106-6',
'10.3828/978-0-85323-752-5',
'10.3846/cpc.2017.286',
'10.3920/978-90-8686-728-8_4',
'10.4056/sigs.1072907',
'10.4056/sigs.1113067',
'10.4056/sigs.1283367',
'10.4056/sigs.2014648',
'10.4056/sigs.2054696',
'10.4056/sigs.2225018',
'10.4056/sigs.23264',
'10.4056/sigs.2615838',
'10.4056/sigs.31864',
'10.4056/sigs.32535',
'10.4056/sigs.35575',
'10.4056/sigs.42644',
'10.4056/sigs.681272',
'10.4056/sigs.821804',
'10.4056/sigs.942153',
'10.4103/0255-0857.38850',
'10.4103/0973-1229.104495',
'10.4103/0973-1229.109335',
'10.4103/0973-1229.109343',
'10.4103/0973-1229.130283',
'10.4103/0973-1229.34714',
'10.4103/0973-1229.51213',
'10.4103/0973-1229.87261',
'10.4103/0974-9233.164615',
'10.4103/1596-4078.182319',
'10.4103/2278-330X.110506',
'10.4169/002557010x529815',
'10.4169/002557010X529815',
'10.4267/pollution-atmospherique.4936',
'10.46426/jp2kp.v20i1.42',
'10.46426/jp2kp.v20i2.49',
'10.5047/meep.2019.00701.0001',
'10.51437/jgns.v1i1.29',
'10.51437/jgns.v1i1',
'10.5334/sta.az',
'10.5428/pcar20120511',
'10.5465/AMR.2011.65554783',
'10.5581/1516-8484.20110123',
'10.5604/01.3001.0012.8474',
'10.5604/20815735.1195358',
'10.5604/20831862.1144420',
'10.5604/20842937.1134333',
'10.5812/ircmj.9588',
'10.6019/blueprint_20130405',
'10.62015/np.2002.v10.503',
'10.7146/cns.v6i0.122249',
'10.7146/cns.v6i0.122251',
'10.7182/prtr.1.6.1.f04016025hh795up',
'10.7313/upo9781904761679.011',
'10.7454/irhs.v1i1.50',
'10.7556/jaoa',
'10.7575/aiac.ijalel.v.6n.3p.71',
'10.9775/kvfd.2010.2081',
);

const NULL_DOI_BUT_GOOD = array(  // TODO - these need to be manually double checked once in a great while.  Note that a failed url on one computer does not mean it is gone, it might just be you
'10.1002/047084289X.rt358.pub2',
'10.1002/14651858.CD015477',
'10.1002/ps.2259',
'10.1007/3-540-46145-0_17',
'10.1007/978-94-024-1120-1_7',
'10.1007/s002340100589',
'10.1007/s10914-016-9364-7',
'10.1007/s11255-013-0410-6',
'10.1007/s40263-014-0163-5',
'10.1016/j.amjmed.2023.10.022',
'10.1016/j.biochi.2011.07.001',
'10.1016/j.copsyc.2019.06.024',
'10.1016/j.drugalcdep.2011.12.007',
'10.1016/S0021-9258(20)80600-0',
'10.1017/9781108890960',
'10.1017/CBO9780511498282',
'10.1017/CBO9781107415416',
'10.1017/CBO9781139062404',
'10.1017/S0020859000111332',
'10.1017/S0021875811000508',
'10.1017/s0022149x17000384',
'10.1017/S002246340300002X',
'10.1017/S0025100306002659',
'10.1017/S0025100306002830',
'10.1017/S0026749X00015845',
'10.1017/S0043887119000157',
'10.1017/S0950268811002615',
'10.1038/s42003-022-04132-y',
'10.1046/j.1360-0443.2003.00422.x',
'10.1046/j.1365-294x.2003.01965.x',
'10.1073/pnas.2208661120',
'10.1075/lal.37.06ch',
'10.1080/00277738.2016.1159450',
'10.1080/009059999109037',
'10.1080/02699050110119817',
'10.1080/07418820701485395',
'10.1080/08912963.2016.1166360',
'10.1080/13697130802054078',
'10.1080/17512433.2019.1637731',
'10.1086/tcj.57.20066240',
'10.1089/neu.2008.0461',
'10.1089/neu.2008.0586',
'10.1093/acref/9780195301731.013.41463',
'10.1093/acref/9780195301731.013.45639',
'10.1093/acrefore/9780190201098.013.1357',
'10.1093/acrefore/9780190228620.013.557',
'10.1093/acrefore/9780199340378.013.382',
'10.1093/acrefore/9780199340378.013.75',
'10.1093/aesa/10.1.1',
'10.1093/anb/9780198606697.001.0001/anb-9780198606697-e-1800262',
'10.1093/anb/9780198606697.article.0801438',
'10.1093/anb/9780198606697.article.1302612',
'10.1093/anb/9780198606697.article.1800262',
'10.1093/anb/9780198606697.article.1803850',
'10.1093/benz/9780199773787.article.B00145199',
'10.1093/benz/9780199773787.article.B00183827',
'10.1093/gao/9781884446054.article.T082129',
'10.1093/gao/9781884446054.article.T2085714',
'10.1093/gmo/9781561592630.article.00904',
'10.1093/gmo/9781561592630.article.03692',
'10.1093/gmo/9781561592630.article.05207',
'10.1093/gmo/9781561592630.article.23902',
'10.1093/gmo/9781561592630.article.25557',
'10.1093/gmo/9781561592630.article.26981',
'10.1093/gmo/9781561592630.article.29523',
'10.1093/gmo/9781561592630.article.29991',
'10.1093/gmo/9781561592630.article.40060',
'10.1093/gmo/9781561592630.article.45738',
'10.1093/gmo/9781561592630.article.A2242442',
'10.1093/gmo/9781561592630.article.J095300',
'10.1093/gmo/9781561592630.article.J441700',
'10.1093/gmo/9781561592630.article.L2232256',
'10.1093/gmo/9781561592630.article.O002751',
'10.1093/gmo/9781561592630.article.O008391',
'10.1093/gmo/9781561592630.article.O008391',
'10.1093/gmo/9781561592630.article.O903864',
'10.1093/gmo/9781561592630.article.O904536',
'10.1093/musqtl/gdw009',
'10.1093/odnb/9780198614128.013.107316',
'10.1093/odnb/9780198614128.013.108196',
'10.1093/ref:odnb/101214',
'10.1093/ref:odnb/10191',
'10.1093/ref:odnb/11650',
'10.1093/ref:odnb/12950',
'10.1093/ref:odnb/12952',
'10.1093/ref:odnb/15029',
'10.1093/ref:odnb/27347',
'10.1093/ref:odnb/30926',
'10.1093/ref:odnb/32953',
'10.1093/ref:odnb/33171',
'10.1093/ref:odnb/33272',
'10.1093/ref:odnb/33369',
'10.1093/ref:odnb/34349',
'10.1093/ref:odnb/34407',
'10.1093/ref:odnb/35778',
'10.1093/ref:odnb/37382',
'10.1093/ref:odnb/39831',
'10.1093/ref:odnb/4556',
'10.1093/ref:odnb/45776',
'10.1093/ref:odnb/49417',
'10.1093/ref:odnb/56108',
'10.1093/ref:odnb/5742',
'10.1093/ref:odnb/610',
'10.1093/ref:odnb/61643',
'10.1093/ref:odnb/68196',
'10.1093/ref:odnb/703',
'10.1093/ref:odnb/7418',
'10.1093/ref:odnb/74876',
'10.1093/ref:odnb/77340',
'10.1093/ref:odnb/7960',
'10.1093/ref:odnb/7960',
'10.1093/ref:odnb/8581',
'10.1093/ref:odnb/93823',
'10.1093/ref:odnb/95151',
'10.1093/ww/9780199540884.013.24803',
'10.1093/ww/9780199540884.013.U284091',
'10.1097/00005053-200111000-00004',
'10.1097/00010694-199601000-00003',
'10.1097/00043426-200306000-00002',
'10.1098/rsos.170329',
'10.1101/2024.01.20.576352',
'10.1101/315457',
'10.1101/329847',
'10.1101/820456',
'10.1101/cshperspect.a012914',
'10.1101/cshperspect.a017715',
'10.1101/gr.070276.107',
'10.1101/gr.074492.107',
'10.1101/gr.076588.108',
'10.1101/gr.082701.108',
'10.1101/gr.094052.109',
'10.1101/gr.101386.109',
'10.1101/gr.116301.110',
'10.1101/gr.123901.111',
'10.1101/gr.1311003',
'10.1101/gr.161968.113',
'10.1101/gr.162901',
'10.1101/gr.192799.115',
'10.1101/gr.196469.115',
'10.1101/gr.234971.118',
'10.1101/gr.2596504',
'10.1101/gr.275638.121',
'10.1101/gr.277663.123',
'10.1101/gr.3228405',
'10.1101/gr.3955206',
'10.1101/gr.5383506',
'10.1101/gr.6757907',
'10.1101/gr.9.2.195',
'10.1101/sqb.1963.028.01.066',
'10.1101/sqb.1983.047.01.088',
'10.1101/sqb.2010.75.037',
'10.1103/PhysRevLett.92.121101',
'10.1107/S0365110X63000797',
'10.1107/S0365110X65002670',
'10.1107/S2052252520007769',
'10.1108/02610150610687836',
'10.1111/ajag.12772',
'10.1111/head.12769',
'10.1111/j.1572-0241.1998.02633.x',
'10.1111/j.1741-5705.2004.00235.x',
'10.1111/jpy.12980',
'10.11137/2019_2_437_443',
'10.1117/1.AP.2.3.036006',
'10.1117/12.2546838',
'10.1124/dmd.109.028605',
'10.1124/dmd.109.030551',
'10.1124/dmd.117.078980',
'10.1124/jpet.102.039883',
'10.1124/jpet.103.049882',
'10.1124/jpet.103.055434',
'10.1124/jpet.103.060038',
'10.1124/jpet.103.062984',
'10.1124/jpet.104.068841',
'10.1124/jpet.104.076653',
'10.1124/jpet.106.101998',
'10.1124/jpet.106.104463',
'10.1124/jpet.106.104968',
'10.1124/jpet.109.156711',
'10.1124/jpet.113.206383',
'10.1124/jpet.116.232876',
'10.1124/jpet.116.237412',
'10.1124/jpet.118.254508',
'10.1124/jpet.123.001681',
'10.1124/mol.109.061051',
'10.1124/mol.55.6.1101',
'10.1124/pharmrev.120.000131',
'10.1124/pr.111.005223',
'10.1124/pr.112.007054',
'10.1124/pr.115.012138',
'10.1124/pr.56.2.6',
'10.1124/pr.58.1.6',
'10.1124/pr.59.1.3',
'10.1126/sciadv.adf6182',
'10.1126/science.1105113',
'10.1128/mspheredirect.00157-19',
'10.1130/1052-5173(2003)013<4:TEFTGE>2.0.CO;2',
'10.1130/1052-5173(2003)13<0004:HLTOTP>2.0.CO;2',
'10.1130/1052-5173(2004)014<4:CAAPDO>2.0.CO;2',
'10.1130/1052-5173(2005)015[4:TSFHIO]2.0.CO;2',
'10.1130/G110GW.1',
'10.1130/GSAT-G198A.1',
'10.1130/GSAT01701A.1',
'10.1130/GSAT01701A.1',
'10.1130/gsat01801gw.1',
'10.1130/GSAT01801GW.1',
'10.1130/GSAT01802A.1',
'10.1130/GSAT151A.1',
'10.1130/GSAT151A.1',
'10.1130/GSATG158A.1',
'10.1130/GSATG321A.1',
'10.1130/GSATG35A.1',
'10.1130/GSATG61A.1',
'10.1134/S003103011805009X',
'10.1136/adc.2004.056952',
'10.1136/adc.63.3.277',
'10.1136/adc.67.7_spec_no.808',
'10.1136/adc.76.6.518',
'10.1136/adc.83.4.353',
'10.1136/annrheumdis-2021-221795',
'10.1136/ard.2003.015925',
'10.1136/ard.2004.028217',
'10.1136/ard.2011.151191',
'10.1136/ard.32.6.493',
'10.1136/ard.36.2.121',
'10.1136/ard.47.1.84-b',
'10.1136/ard.61.suppl_2.ii70',
'10.1136/ard.61.suppl_3.iii8',
'10.1136/bjo.2005.070888',
'10.1136/bjo.2006.090712',
'10.1136/bjo.86.2.144',
'10.1136/bjsports-2015-095317',
'10.1136/bmj-2023-075294',
'10.1136/bmj.1.1016.917',
'10.1136/bmj.1.2581.1523-b',
'10.1136/bmj.1.5011.182',
'10.1136/bmj.2.5042.451',
'10.1136/bmj.288.6435.1950',
'10.1136/bmj.3.5561.338',
'10.1136/bmj.301.6755.776',
'10.1136/bmj.302.6790.1465',
'10.1136/bmj.324.7333.329',
'10.1136/bmj.326.7399.1124',
'10.1136/bmj.330.7488.385',
'10.1136/bmj.331.7508.108-b',
'10.1136/bmj.331.7518.673',
'10.1136/bmj.b5465',
'10.1136/bmj.b800',
'10.1136/bmj.f288',
'10.1136/bmj.f360',
'10.1136/bmj.f3646',
'10.1136/bmj.f5307',
'10.1136/bmj.g2467',
'10.1136/bmj.g6661',
'10.1136/bmj.h3084',
'10.1136/bmj.h4601',
'10.1136/bmj.h6656',
'10.1136/bmj.i3857',
'10.1136/bmj.k351',
'10.1136/bmj.k3546',
'10.1136/bmj.m2512',
'10.1136/bmj.m2913',
'10.1136/bmj.m3021',
'10.1136/bmj.m3379',
'10.1136/bmj.m4037',
'10.1136/bmj.m4761',
'10.1136/bmj.n1058',
'10.1136/bmj.n1088',
'10.1136/bmj.n1088',
'10.1136/bmj.n747',
'10.1136/bmj.p2706',
'10.1136/bmjnph-2023-000789',
'10.1136/bmjopen-2011-000431',
'10.1136/bmjopen-2011-000653',
'10.1136/bmjopen-2017-017248',
'10.1136/bmjopen-2017-019376',
'10.1136/bmjopen-2020-042247',
'10.1136/emj.19.3.206',
'10.1136/emj.2006.035915',
'10.1136/gut.48.3.435',
'10.1136/ip.9.3.205',
'10.1136/jcp.11.5.406',
'10.1136/jcp.12.3.215',
'10.1136/jcp.19.3.284',
'10.1136/jcp.2004.019810',
'10.1136/jcp.2009.068874',
'10.1136/jcp.33.4.380',
'10.1136/jcp.52.4.245',
'10.1136/jmedgenet-2017-104620',
'10.1136/jmg.4.1.7',
'10.1136/jnnp-2016-315238',
'10.1136/jnnp-2017-317168',
'10.1136/jnnp-2019-321653',
'10.1136/jnnp.2007.133025',
'10.1136/jnnp.2007.139717',
'10.1136/jnnp.70.4.520',
'10.1136/practneurol-2014-001071',
'10.1136/rmdopen-2015-000052',
'10.1136/thx.2007.091223',
'10.1136/tobaccocontrol-2019-054940',
'10.1137/0215025',
'10.1146/annurev-polisci-050317-070830',
'10.11610/Connections.15.2.06',
'10.1163/15685289760518153',
'10.1163/25898833-12340008',
'10.11646/zootaxa.4048.2.3',
'10.11676/qxxb2020.072',
'10.1172/JCI116388',
'10.1177/0091270009352087',
'10.1177/1073110517703105',
'10.1177/1532440015603814',
'10.1183/09031936.00042309',
'10.1183/09031936.00051108',
'10.1183/20734735.001918',
'10.1186/1999-3110-55-30',
'10.1186/s40850-017-0015-0',
'10.1186/s40850-017-0025-y',
'10.1186/s40850-018-0032-7',
'10.1186/s40850-020-00057-3',
'10.11865/zs.202033',
'10.1192/bjp.134.1.67',
'10.1257/aer.102.3.349',
'10.1261/rna.2338706',
'10.1261/rna.2340906',
'10.1261/rna.682507',
'10.12788/cutis.0844',
'10.12989/sem.2013.48.6.791',
'10.12989/sem.2017.62.3.365',
'10.12989/was.2018.27.2.137',
'10.13106/ijidb.2015.vol6.no1.5.',
'10.13169/worlrevipoliecon.11.4.0533',
'10.1351/pac-rec-12-05-10',
'10.1353/cli.2007.0025',
'10.1353/mov.2010.0012',
'10.1353/nlh.0.0065',
'10.1353/pbm.1998.0022',
'10.1358/dof.2007.032.09.1138229',
'10.1370/afm.667',
'10.1370/afm.754',
'10.1371/journal.pntd.0006929',
'10.1387/ijdb.052063jt',
'10.1400/34421',
'10.1400/41466',
'10.14241/asgp.2023.01',
'10.14241/asgp.2023.03',
'10.14241/asgp.2023.17',
'10.14482/memor.22.5948',
'10.1503/cmaj.070335',
'10.1503/cmaj.151104',
'10.1515/anre-2015-0009',
'10.1515/jsall-2016-0003',
'10.15171/apb.2016.033',
'10.15171/apb.2018.062',
'10.1523/JNEUROSCI.0955-05.2005',
'10.1523/JNEUROSCI.16-11-03630.1996',
'10.1523/JNEUROSCI.19-18-07770.1999',
'10.1523/JNEUROSCI.23-09-03944.2003',
'10.1523/JNEUROSCI.3728-06.2007',
'10.15242/IIE.E0516006',
'10.15253/2175-6783.20202143686',
'10.15298/rusentj.32.3.02',
'10.1542/peds.2007-3448',
'10.1542/peds.2012-3931',
'10.1542/peds.2016-3436',
'10.1542/peds.98.1.63',
'10.15446/historelo.v12n23.76565',
'10.15537/smj.2015.4.10210',
'10.1558/bsor.v41i3.22',
'10.1558/bsrv.v25i2.194',
'10.1558/firn.35029',
'10.1558/ijsnr.v4i2.251',
'10.15581/017.23.67-84',
'10.15585/mmwr.mm6601a6',
'10.15585/mmwr.mm6730a2',
'10.15585/mmwr.mm6803a3',
'10.15845/on.v33i0.152',
'10.15845/on.v35i0.289',
'10.15845/on.v36i0.394',
'10.15845/on.v40i0.1309',
'10.1590/2358-2936e2021003',
'10.1592/phco.19.4.306.30934',
'10.1600/036364416x692442',
'10.1633/jim.2006.37.1.083',
'10.1677/joe.0.1650693',
'10.1682/JRRD.2004.03.0293',
'10.1682/JRRD.2006.03.0025',
'10.1682/JRRD.2006.05.0041',
'10.1682/jrrd.2006.11.0147',
'10.1682/jrrd.2007.02.0034',
'10.1682/JRRD.2009.08.0140',
'10.1682/jrrd.2010.03.0024',
'10.1682/JRRD.2010.03.0035',
'10.1682/JRRD.2011.09.0183',
'10.1682/JRRD.2011.11.0214',
'10.1682/JRRD.2012.05.0096',
'10.1682/JRRD.2012.05.0099',
'10.17159/2077-4907/2021/ldd.v25.15',
'10.17226/10264',
'10.17509/gea.v7i2.1725',
'10.17576/akad-2021-9103-12',
'10.17576/geo-2021-1703-06',
'10.17576/JKMJC-2018-3403-16',
'10.17576/pengurusan-2017-49-06',
'10.17660/actahortic.1990.279.67',
'10.17660/actahortic.2001.558.14',
'10.17660/actahortic.2005.665.48',
'10.17660/ActaHortic.2010.868.52',
'10.1787/24132764',
'10.18520/cs/v112/i01/139-146',
'10.18520/cs/v112/i05/923-932',
'10.18520/cs/v112/i05/933-940',
'10.18520/v109/i6/1061-1069',
'10.18820/24150509/JCH42.v1.8',
'10.18845/tm.v28i4.2438',
'10.18926/AMO/30942',
'10.20341/gb.2018.005',
'10.21504/amj.v3i1.732',
'10.21504/amj.v5i3.1655',
'10.21504/amj.v6i2.1118',
'10.2173/bow.sompig1.01',
'10.2174/0929867043364757',
'10.2174/1381612033454856',
'10.2174/138161210790963869',
'10.2174/1381612821666150514104244',
'10.2174/1385272054038318',
'10.2174/138920112800624373',
'10.2174/138920212803251373',
'10.2174/1389202918666170815144627',
'10.2174/1389202918666170815144627',
'10.2174/156802611795371341',
'10.2174/1570159x14666151208113700',
'10.2174/1570178616666190807101012',
'10.2174/157340607782360353',
'10.2174/157488407779422302',
'10.2174/187152606776056706',
'10.2174/187152710790966641',
'10.21827/krisis.40.1.37054',
'10.21829/myb.2007.1311238',
'10.21897/rmvz.13',
'10.21897/rmvz.276',
'10.22059/ijmge.2012.51321',
'10.22059/jfadram.2012.24776',
'10.22161/ijels.55.21',
'10.22201/iih.24485004e.2012.44.35787',
'10.22679/AVS.2021.6.2.003',
'10.2298/AOO1202028D',
'10.2298/BALC1445037F',
'10.2298/BALC1445107C',
'10.2298/BALC1748007K',
'10.2298/BALC1748123B',
'10.2298/BALC1748269S',
'10.2298/bg20130213jecmenica',
'10.2298/GEI0701061D',
'10.2298/MPNS0712581D',
'10.2298/PAN160220031M',
'10.2298/SARH1212792K',
'10.2298/ZMSDN1553739G',
'10.2298/ZRVI0643031K',
'10.2298/ZRVI1653343D',
'10.2307/1356853',
'10.2307/3677937',
'10.23940/ijpe.20.07.p9.10671077',
'10.23968/2500-0055-2016-1-4-18-25',
'10.24039/cv20142240',
'10.24233/sribios.3.2.2022.367',
'10.2478/v10273-012-0028-9',
'10.24894/GESN-EN.2005.62013',
'10.25024/kj.2011.51.4.110',
'10.25024/kj.2013.53.4.14',
'10.25100/cm.v51i2.4266',
'10.25911/5D63C47EE2628',
'10.25911/5d74e50054bb9',
'10.26577/eje-2018-3-832',
'10.2903/j.efsa.2010.1752',
'10.29075/9780876332764/101812/1',
'10.29104/phi-aqualac/2017-v9-2-10',
'10.29117/jcsis.2021.0290',
'10.29173/bluejay1721',
'10.2979/aft.2005.52.1.137',
'10.3122/jabfm.2009.06.090037',
'10.31318/2522-4190.2018.121.133109',
'10.31439/UNISCI-101',
'10.31439/unisci-98',
'10.3171/2009.6.JNS081161',
'10.31810/RSEL.52.1.5',
'10.3201/eid0809.010536',
'10.3201/eid1003.030257',
'10.3201/eid1110.041279',
'10.3205/15gmds058',
'10.3205/iprs000167',
'10.3366/hls.2013.0056',
'10.3389/fimmu.2018.01931',
'10.3389/fmicb.2013.00035',
'10.3389/fncom.2014.00086',
'10.3389/fpls.2016.01201',
'10.3389/fpls.2019.00360',
'10.3389/fpsyg.2021.626122',
'10.3389/fpsyt.2013.00027',
'10.3389/fpsyt.2015.00175',
'10.3399/bjgp11X572427',
'10.3399/bjgp18X698885',
'10.34019/2594-8296.2019.v25.28740',
'10.3406/befeo.1954.5607',
'10.3733/ca.v060n04p180',
'10.3733/hilg.v11n09p493',
'10.3733/hilg.v16n08p361',
'10.3746/pnf.2017.22.2.67',
'10.3748/wjg.v17.i19.2365',
'10.3748/wjg.v18.i30.4004',
'10.3748/wjg.v22.i20.4794',
'10.3819/ccbr.2008.30003',
'10.3916/c52-2017-10',
'10.3916/C55-2018-03',
'10.3916/c56-2018-08',
'10.3929/ethz-a-009933926',
'10.4062/biomolther.2009.17.3.241',
'10.4062/biomolther.2012.20.5.446',
'10.4067/S0717-95022016000400044',
'10.4100/jhse.2011.63.04',
'10.4102/hts.v73i3.4655',
'10.4135/9781446216989',
'10.4187/respcare.03319',
'10.4310/pamq.2006.v2.n2.a3',
'10.4331/wjbc.v4.i4.79',
'10.4337/9781845421472',
'10.4467/2450050XSNR.22.013.17026',
'10.5012/BKCS.2002.23.3.404',
'10.5012/bkcs.2010.31.02.487',
'10.5012/JKCS.2005.49.6.603',
'10.5027/andgeoV41n3-a04',
'10.5027/andgeoV45n3-3117',
'10.5027/andgeov46n1-3142',
'10.5027/andgeoV46n2-3130',
'10.5027/andgeoV47n1-3260',
'10.5027/andgeoV47n3-3278',
'10.5027/andgeoV50n2-3487',
'10.5040/9781350082700.ch-001',
'10.5139/IJASS.2012.13.1.14',
'10.5303/JKAS.2002.35.2.075',
'10.5303/jkas.2002.35.2.075',
'10.5303/JKAS.2013.46.1.41',
'10.5377/ruc.v1i1.6764',
'10.53841/bpslg.2005.6.2.124',
'10.5392/IJoC.2014.10.1.036',
'10.54097/hbem.v7i.6940',
'10.5424/sjar/2013112-3673',
'10.5479/si.00775630.183.1',
'10.5479/si.00775630.501.1',
'10.5479/si.00775630.86.1',
'10.5479/si.00810223.1.1',
'10.5479/si.00810223.38.1',
'10.5479/si.00810258.46.1',
'10.5479/si.00810266.74.1',
'10.5479/si.00810282.158',
'10.5479/si.00810282.193',
'10.5479/si.00810282.238',
'10.5479/si.00810282.284',
'10.5479/si.00810282.549',
'10.5479/si.00810282.596',
'10.5479/si.00963801.11-709.197',
'10.5479/si.00963801.114-3470.271',
'10.5479/si.00963801.26-1334.811',
'10.5479/si.00963801.35-1648.351',
'10.5479/si.00963801.37-1699.43',
'10.5479/si.00963801.48-2069.169',
'10.5479/si.00963801.66-2560.1',
'10.5479/si.00963801.96-3198.215',
'10.5479/si.03629236.110.i',
'10.5479/si.03629236.188.1',
'10.5479/si.03629236.208.1',
'10.5479/si.03629236.237.1',
'10.5479/si.9781935623069.39',
'10.5483/BMBRep.2004.37.1.122',
'10.5483/bmbrep.2004.37.6.741',
'10.5483/BMBRep.2006.39.5.626',
'10.5483/BMBRep.2010.43.10.688',
'10.5483/BMBRep.2012.45.3.159',
'10.5483/BMBRep.2012.45.4.259',
'10.5483/BMBRep.2016.49.9.141',
'10.5506/APhysPolB.42.2175',
'10.5516/NET.2009.41.5.603',
'10.5516/NET.2009.41.8.995',
'10.5534/wjmh.200073',
'10.5572/KOSAE.2008.24.4.439',
'10.5656/ksae.2009.48.1.053',
'10.5656/ksae.2009.48.4.467',
'10.5656/ksae.2012.09.0.022',
'10.5656/ksae.2014.01.1.075',
'10.5681/jcs.2014.005',
'10.5710/AMGH.24.12.2013.1889',
'10.5757/ASCT.2014.23.2.61',
'10.5771/0506-7286-1968-1-93',
'10.5805/SFTI.2013.15.5.797',
'10.5805/SFTI.2016.18.4.424',
'10.5817/CP2019-3-5',
'10.5840/maritain2017334',
'10.5897/JENE12.093',
'10.6018/daimon/277171',
'10.6018/j103411',
'10.6241/concentric.ling.200701_33(1).0001',
'10.7233/jksc.2013.63.2.029',
'10.7233/jksc.2015.65.6.112',
'10.7314/APJCP.2012.13.10.5177',
'10.7314/APJCP.2012.13.8.4177',
'10.7314/APJCP.2013.14.6.3425',
'10.7314/apjcp.2013.14.7.4283',
'10.7314/apjcp.2013.14.9.4965',
'10.7314/apjcp.2014.15.19.8509',
'10.7314/apjcp.2014.15.8.3353',
'10.7314/APJCP.2015.16.4.1315',
'10.7314/apjcp.2015.16.8.3121',
'10.7318/KJFC/2012.27.6.598',
'10.7476/9786557080009',
'10.7731/KIFSE.2015.29.2.039',
'10.7770/rchdcp-V3N1-art348',
'10.7780/kjrs.2020.36.3.2',
'10.8080/4020100059499',
'10.9755/ejfa.2018.v30.i3.1639',
/** We cannot add hdls, since we need the final URL - see below **/
);
const NULL_HDL_BUT_KNOWN = array(  // Do not report these, since they work usually.
'10399/1967',
'1828/7796',
'20.500.11850/130560',
'2108/59410',
'2318/1651769',
);


