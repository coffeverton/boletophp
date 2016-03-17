<?php
// +----------------------------------------------------------------------+
// | BoletoPhp - Vers&atilde;o Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo est&aacute; dispon&iacute;vel sob a Licen&ccedil;a GPL dispon&iacute;vel pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Voc&ecirc; deve ter recebido uma c&oacute;pia da GNU Public License junto com     |
// | esse pacote; se n&atilde;o, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colabora&ccedil;&otilde;es de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do	  |
// | PHPBoleto de Jo&atilde;o Prado Maia e Pablo Martins F. Costa				  |
// | 																	  |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br             |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Equipe Coordena&ccedil;&atilde;o Projeto BoletoPhp: <boletophp@boletophp.com.br>   |
// | Desenvolvimento Boleto Ita&uacute;: Glauber Portella		                    |
// +----------------------------------------------------------------------+
$larguramaxima = 635;
//$largura_td = 150;
$largura_td = 112;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//Dtd HTML 4.0 Transitional//EN'>
<HTML>
    <HEAD>
    <TITLE><?php echo $dadosboleto["identificacao"]; ?></TITLE>
        <META http-equiv=Content-Type content=text/html charset=ISO-8859-1>
        <meta name="Generator" content="Projeto BoletoPHP - www.boletophp.com.br - Licen&ccedil;a GPL" />
        <style type=text/css>
        .cp {  font: 12px Helvetica; color: #000}
        .ld { font: bold 15px Helvetica; color: black}
        .ct { FONT: 10px Helvetica; COLOR: #333}
        .cn { FONT: 12px Helvetica; COLOR: black }
        .bc { font: bold 20px Helvetica; color: #000000 }
        .ld2 { font: bold 12px Helvetica; color: #000000 }
        hr{
            height: 1px;
            background-color: black;
            border:none;
            width: 100%;
        }
        *{
            font-size: 12px;
        }
        table{
            border-collapse: collapse;
        }
        table td{
            padding: 2px;
        }
        .b_l{
            border-left: 1px solid black;
        }
        .b_r{
            border-right: 1px solid black;
        }
        .b_t{
            border-top: 1px solid black;
        }
        .b_b{
            border-bottom: 1px solid black;
        }
        .b_all{
            border: 1px solid black;
        }
        .alinhado_direita{
            text-align: right;
            /*background-color:lightcoral;*/
            /*padding-right: 38px;*/
        }
        .espacamento_direita{
            /*width: 38px;*/
            width: 20px;
            /*background-color:lightblue;*/
        }
        </style>
    </head>
    <BODY text=#000000 bgColor=#ffffff topMargin="0" rightMargin="0">
    <table id="global" width="<?=$larguramaxima?>" height="1030" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td>
                <table width="<?=$larguramaxima?>" cellspacing=0 cellpadding=0 border="0">
                    <tr>
                        <td valign="top" class="cp">
                            <DIV ALIGN="CENTER">Instru&ccedil;&otilde;es de Impress&atilde;o</DIV>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" class="cp">
                            <DIV ALIGN="left">
                                <p>
                                    <ul>
                                        <li>Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (N&atilde;o use modo econ&ocirc;mico).</li>
                                        <li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens m&iacute;nimas &agrave; esquerda e &agrave; direita do formul&aacute;rio.</li>
                                        <li>Corte na linha indicada. N&atilde;o rasure, risque, fure ou dobre a regi&atilde;o onde se encontra o c&oacute;digo de barras.</li>
                                        <li>Caso n&atilde;o apare&ccedil;a o c&oacute;digo de barras no final, clique em F5 para atualizar esta tela.</li>
                                        <li>Caso tenha problemas ao imprimir, copie a sequencia num&eacute;rica abaixo e pague no caixa eletr&ocirc;nico ou no internet banking:</li>
                                    </ul>
                                    <br />
                                    <br />
                                    <span class="ld2">
                                    &nbsp;&nbsp;&nbsp;&nbsp;Linha Digit&aacute;vel: &nbsp;<?php echo $dadosboleto["linha_digitavel"]?><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;Valor: &nbsp;&nbsp;R$ <?php echo $dadosboleto["valor_boleto"]?><br>
                                    </span>
                                </p>
                            </DIV>
                        </td>
                    </tr>
                </table>
                <br>
                <table cellspacing=0 cellpadding=0  width="<?=$larguramaxima?>" border="0">
                    <tbody>
                        <tr>
                            <td class="ct"  width="<?=$larguramaxima?>"><img height=1 src=imagens/6.png width="100%" border="0"></td>
                        </tr>
                        <tr>
                            <td class="ct"  width="<?=$larguramaxima?>">
                                <div align=right>
                                    <b class="cp">Recibo do Pagador</b>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 width="<?=$larguramaxima?>" border="0">
                    <tr>
                        <td class="cp">
                            <span class="campo"><IMG src="imagens/logoitau.jpg"  height="40" border="0"></span>
                        </td>
                        <td valign="bottom"><img height="22" src="imagens/3.png" border="0"></td>
                        <td class="cp" valign="bottom" align="center"><font class="bc"><?php echo $dadosboleto["codigo_banco_com_dv"]?></font></td>
                        <td valign="bottom"><img height="22" src="imagens/3.png" border="0"></td>
                        <td class=ld align="right" valign="bottom">
                            <span class="ld">
                                <span class="campotitulo">
                                <?php echo $dadosboleto["linha_digitavel"]?>
                                </span>
                            </span>
                        </td>
                    </tr>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l b_t" valign="top" width="346">Benefici&aacute;rio</td>
                            <td class="ct b_t b_r" valign="top"  width="130">CNPJ/CPF</td>
                            <td class="ct b_t b_r" valign="top"  >Sacador/Avalista</td>
                            <td class="ct b_t alinhado_direita" valign="top">Vencimento</td>
                            <td class="ct b_t b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="cp b_l b_b" valign="top" >
                                <span class="campo"><?php echo $dadosboleto["cedente"]; ?></span>
                            </td>
                            <td class="cp b_r" valign="top" >
                              <span class="campo">
                              <?php echo isset($dadosboleto["cpf_cnpj"]) ? $dadosboleto["cpf_cnpj"] : '' ?>
                              </span>
                            </td>
                            <td class="cp b_r" valign="top"  ><span class="campo"><?php echo $dadosboleto["avalista"]?></span></td>
                            <td class="cp alinhado_direita" valign="top"><span class="campo"><?php echo $dadosboleto["data_vencimento"]?></span></td>
                            <td class="ct b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="ct b_l b_t b_r" valign="top" colspan="5">Endere&ccedil;o Benefici&aacute;rio/Sacador Avalista</td>
                        </tr>
                        <tr>
                            <td class="cp ct b_l b_b b_r" valign="top" colspan="5">
                                <b class="campo">
                                    <?php echo $dadosboleto['endereco']?> - <?php echo $dadosboleto['cidade_uf']?>
                                </b>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l alinhado_direita" valign="top" >Nosso N&uacute;mero</td>
                            <td class="ct b_r espacamento_direita"></td>
                            <td class="ct b_r" valign="top" >Carteira</td>
                            <td class="ct b_r" valign="top" >Esp&eacute;cie</td>
                            <td class="ct b_r" valign="top" >Quantidade</td>
                            <td class="ct alinhado_direita" valign="top" >Valor</td>
                            <td class="ct b_r espacamento_direita"></td>
                            <td class="ct alinhado_direita" valign="top" >Ag&ecirc;ncia/C&oacute;digo do Benefici&aacute;rio</td>
                            <td class="ct b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="cp b_l b_b alinhado_direita" align="center" valign="top" ><span class="campo"><?php echo $dadosboleto["numero_documento"]; ?></span></td>
                            <td class="ct b_b b_r espacamento_direita"></td>
                            <td class="cp b_b b_r" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["carteira"]; ?></span></td>
                            <td class="cp b_b b_r" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["especie_doc"]; ?></span></td>
                            <td class="cp b_b b_r" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["quantidade"]; ?></span></td>
                            <td class="cp b_b alinhado_direita" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["valor_unitario"]; ?></span></td>
                            <td class="ct b_b b_r espacamento_direita"></td>
                            <td class="cp b_b alinhado_direita" valign="top" ><span class="campo"><?php echo $dadosboleto["agencia"]; ?>/<?php echo $dadosboleto["conta"]; ?>-<?php echo $dadosboleto["conta_dv"]; ?></span></td>
                            <td class="ct b_b b_r espacamento_direita"></td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l b_r" valign="top" >Data do documento</td>
                            <td class="ct b_r" valign="top" >N&uacute;mero do Documento</td>
                            <td class="ct b_r" valign="top" >Esp&eacute;cie do Documento</td>
                            <td class="ct b_r" valign="top" >Aceite</td>
                            <td class="ct b_r" valign="top" >Data do Processamento</td>
                            <td class="ct alinhado_direita" valign="top" >Valor do Documento</td>
                            <td class="ct b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="cp b_l b_r  b_b" valign="top" align="center"  ><span class="campo"><?php echo $dadosboleto["data_documento"]?></span></td>
                            <td class="cp b_r b_b" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["numero_documento"]?></span></td>
                            <td class="cp b_r b_b" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["especie_doc"]?></span></td>
                            <td class="cp b_r b_b" valign="top" align="center" align="right" ><span class="campo"><?php echo $dadosboleto["aceite"]?></span></td>
                            <td class="cp b_r b_b" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["data_documento"]?></span></td>
                            <td class="cp b_b alinhado_direita" valign="top" align="center" ><span class="campo"><?php echo $dadosboleto["valor_boleto"]?></span></td>
                            <td class="ct b_r b_b espacamento_direita"></td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td  class="ct" valign="top"  >&nbsp;</td>
                            <td  width="300" class="ct b_l b_t b_r" valign=middle align="center">Autentica&ccedil;&atilde;o Mec&acirc;nica</td>
                        </tr>
                    </tbody>
                </table>
                <table width="<?=$larguramaxima?>" cellspacing=0 cellpadding=0 border="0">
                    <tr>
                        <td height="1">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="1">
                            <img height=1 src=imagens/6.png width="<?=$larguramaxima?>" border="0">
                        </td>
                    </tr>
                </table>
                <br>
                <table cellspacing=0 cellpadding=0 width="<?=$larguramaxima?>" border="0">
                    <tr>
                        <td class="cp">
                            <span class="campo"><IMG src="imagens/logoitau.jpg"  height="40" border="0"></span>
                        </td>
                        <td valign="bottom"><img height="22" src="imagens/3.png" border="0"></td>
                        <td class="cp" valign="bottom" align="center"><font class="bc"><?php echo $dadosboleto["codigo_banco_com_dv"]?></font></td>
                        <td valign="bottom"><img height="22" src="imagens/3.png" border="0"></td>
                        <td class=ld align="right" valign="bottom">
                            <span class="ld">
                                <span class="campotitulo">
                                <?php echo $dadosboleto["linha_digitavel"]?>
                                </span>
                            </span>
                        </td>
                    </tr>
                </table>
                <table width="<?=$larguramaxima?>" cellspacing=5 cellpadding=0 border="0"><tr><td ></td></tr></table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l b_t b_r" valign="top">Local de pagamento</td>
                            <td class="ct b_t alinhado_direita" valign="middle" width="<?php echo $largura_td?>" >Vencimento</td>
                            <td class="ct b_t b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="cp b_l b_b b_r" valign="top" >
                                AT&Eacute; O VENCIMENTO PAGUE PREFERENCIALMENTE NO ITA&Uacute;<BR />
                                AP&Oacute;S O VENCIMENTO PAGUE SOMENTE NO ITA&Uacute;
                            </td>
                            <td class="ld b_b alinhado_direita" valign="middle">
                                <?php echo $dadosboleto["data_vencimento"]?>
                            </td>
                            <td class="ct b_r b_b espacamento_direita"></td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l" valign="top">Benefici&aacute;rio</td>
                            <td class="ct b_r" valign="top" >CNPJ/CPF</td>
                            <td class="ct alinhado_direita" valign="top" width="<?php echo $largura_td?>" >Ag&ecirc;ncia/C&oacute;digo do Benefici&aacute;rio</td>
                            <td class="ct b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="cp b_l b_b" valign="top" >
                              <span class="campo">
                              <?php echo $dadosboleto["cedente"]?>
                              </span>
                            </td>
                            <td class="cp b_b b_r" valign="top" >
                              <span class="campo">
                              <?php echo $dadosboleto["cpf_cnpj"]?>
                              </span>
                            </td>
                            <td class="cp b_b alinhado_direita" valign="top" align=center >
                                <span class="campo">
                                  <?php echo $dadosboleto["agencia_codigo"]?>
                                </span>
                            </td>
                            <td class="ct b_r b_b espacamento_direita"></td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l b_r" valign="top" >Data do documento</td>
                            <td class="ct b_r" valign="top" >N<u>o</u> documento</td>
                            <td class="ct b_r" valign="top" >Esp&eacute;cie doc.</td>
                            <td class="ct b_r" valign="top" >Aceite</td>
                            <td class="ct b_r" valign="top" >Data processamento</td>
                            <td class="ct alinhado_direita" valign="top" width="<?php echo $largura_td?>" >Nosso n&uacute;mero</td>
                            <td class="ct b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="cp b_l b_b" valign="top" align="center" >
                              <span class="campo">
                              <?php echo $dadosboleto["data_documento"]?>
                              </span>
                            </td>
                            <td class="cp b_l b_b" valign="top" align="center" >
                                <span class="campo">
                                <?php echo $dadosboleto["numero_documento"]?>
                                </span>
                            </td>
                            <td class="cp b_l b_b" valign="top" align="center"  ><span class="campo">
                                <?php echo $dadosboleto["especie_doc"]?>
                              </span>
                            </td>
                            <td class="cp b_l b_b" valign="top" align="center"  >
                                <span class="campo">
                                    <?php echo $dadosboleto["aceite"]?>
                                </span>
                            </td>
                            <td class="cp b_l b_b" valign="top" align="center"  >
                               <span class="campo">
                               <?php echo $dadosboleto["data_processamento"]?>
                               </span>
                            </td>
                            <td class="cp b_l b_b alinhado_direita" valign="top" align=center >
                                 <span class="campo">
                                 <?php echo $dadosboleto["nosso_numero"]?>
                                 </span>
                            </td>
                            <td class="ct b_b b_r espacamento_direita"></td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l b_r" valign="top" >Uso do banco</td>
                            <td class="ct b_r" valign="top" >Carteira</td>
                            <td class="ct b_r" valign="top" >Esp&eacute;cie</td>
                            <td class="ct b_r" valign="top" >Quantidade</td>
                            <td class="ct alinhado_direita" valign="top" >Valor</td>
                            <td class="ct b_r espacamento_direita"></td>
                            <td class="ct alinhado_direita" valign="top" width="<?php echo $largura_td?>" >(=) Valor documento</td>
                            <td class="ct b_r espacamento_direita"></td>
                        </tr>
                        <tr>
                            <td class="cp b_l b_b" valign="top"  ></td>
                            <td class="cp b_l b_b" valign="top" align="center" >
                                <span class="campo">
                                    <?php echo $dadosboleto["carteira"]?>
                                </span>
                            </td>
                            <td class="cp b_l b_b" valign="top" align="center"  >
                                <span class="campo">
                                    <?php echo $dadosboleto["especie"]?>
                                </span>
                            </td>
                            <td class="cp b_l b_b" valign="top" align="center"  >
                                <span class="campo">
                                    <?php echo $dadosboleto["quantidade"]?>
                                </span>
                            </td>
                            <td class="cp b_l b_b alinhado_direita" valign="top" align="center"  >
                               <span class="campo">
                               <?php echo $dadosboleto["valor_unitario"]?>
                               </span>
                            </td>
                            <td class="ct b_r b_b espacamento_direita"></td>
                            <td class="cp b_l b_b alinhado_direita" valign="top" align="center">
                               <span class="campo">
                                <?php echo $dadosboleto["valor_boleto"]?>
                               </span>
                            </td>
                            <td class="ct b_r b_b espacamento_direita"></td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 width="<?=$larguramaxima?>" border="0">
                    <tbody>
                        <tr>
                            <td valign="top" class="b_l b_r b_b" rowspan="5" width="487">
                                <font class="ct">Instru&ccedil;&otilde;es
                                (Instru&ccedil;&otilde;es de responsabilidade do benefici&aacute;rio. Qualquer d&uacute;vida sobre este boleto, contate o benefici&aacute;rio)
                                </font>
                                <br>
                                <br>
                                <span class="cp campo">
                                    <?php echo $dadosboleto["instrucoes1"]; ?><br>
                                    <?php echo $dadosboleto["instrucoes2"]; ?><br>
                                    <?php echo $dadosboleto["instrucoes3"]; ?><br>
                                    <?php echo $dadosboleto["instrucoes4"]; ?><br>
                                    <br>
                                </span>
                            </td>
                            <td align=right class="b_r b_b" width="<?php echo $largura_td + 6?>" >
                                <table width="100%" cellspacing=0 cellpadding=0 border="0">
                                    <tbody>
                                        <tr>
                                            <td class="ct" valign="top" align="left" height="15" >(-) Desconto / Abatimentos</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align=right class="b_r b_b" >
                                <table width="100%" cellspacing=0 cellpadding=0 border="0">
                                    <tbody>
                                        <tr>
                                            <td class="ct" valign="top" height="15"  ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align=right class="b_r b_b" >
                                <table width="100%" cellspacing=0 cellpadding=0 border="0">
                                    <tbody>
                                        <tr>
                                            <td class="ct" valign="top" align="left" height="15" >(+) Mora / Multa</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align=right class="b_r b_b" >
                                <table width="100%" cellspacing=0 cellpadding=0 border="0">
                                    <tbody>
                                        <tr>
                                            <td class="ct" valign="top" height="15"  ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align=right class="b_r b_b" >
                                <table width="100%" cellspacing=0 cellpadding=0 border="0">
                                    <tbody>
                                        <tr>
                                            <td class="ct" valign="top" align="left" height="15" >(=) Valor cobrado</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td  class="ct b_l" valign="top" width="82" >
                                Pagador: 
                            </td>
                            <td class="cp" valign="top" width="305">
                                <span class="campo">
                                    <?php echo $dadosboleto["sacado"]?>
                                </span>
                            </td>
                            <td class="ct" valign="top" width="50"  >
                                CNPJ/CPF: 
                            </td>
                            <td class="cp b_r" valign="top">
                                <span class="campo">
                                    <?php echo ($dadosboleto['dados_cliente']["cnpj"]!='')?$dadosboleto['dados_cliente']["cnpj"]:$dadosboleto['dados_cliente']["cpf"]?>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l" valign="top" width="82"  >
                                Endere&ccedil;o: 
                            </td>
                            <td class="cp b_r" valign="top" align="left" >
                                <span class="campo">
                                    <?php echo $dadosboleto["endereco1"]?>
                                </span>
                                <span class="campo">
                                    <?php echo $dadosboleto["endereco2"]?>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct b_l b_b" valign="top"  width="82">
                                Sacador/Avalista:
                            </td>
                            <td class="ct b_b" valign="top"  width="305">
                            </td>
                            <td class="ct b_b" valign="top" width="50">
                                CNPJ:
                            </td>
                            <td class="ct b_b b_r" valign="bottom" align="center"  >
                                <b style="font-size: 9px">C&oacute;digo de Baixa</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellSpacing=0 cellPadding=0 border="0" width="<?=$larguramaxima?>">
                    <tbody>
                        <tr>
                            <td class="ct"  align="right" >
                                Autentica&ccedil;&atilde;o mec&acirc;nica / FICHA DE COMPENSA&Ccedil;&Atilde;O
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellSpacing=0 cellPadding=0 width="<?=$larguramaxima?>" border="0">
                    <tbody>
                        <tr>
                            <td vAlign=bottom align=left height=50><?php fbarcode($dadosboleto["codigo_barras"]); ?></td>
                        </tr>
                    </tbody>
                </table>
                    <table cellSpacing=0 cellPadding=0 width="<?=$larguramaxima?>" border="0">
                        <tbody>
                            <tr>
                                <td class="ct" width="<?=$larguramaxima?>"></td>
                            </tr>
                            <tr>
                                <td class="ct" width="<?=$larguramaxima?>"><div align=right>Corte na linha pontilhada</div></td>
                            </tr>
                            <tr>
                                <td class="ct"  width="<?=$larguramaxima?>"><img height=1 src=imagens/6.png width="<?=$larguramaxima?>" border="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </BODY>
</HTML>