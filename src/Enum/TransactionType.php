<?php declare(strict_types=1);


namespace Yivoff\Redsys\Enum;

/**
 * @see https://pagosonline.redsys.es/tipos-operacion.html
 *
 * Currently missing Types some types mentoined in https://pagosonline.redsys.es/parametros-entrada-salida.html,  since they are
 * not mentioned in the docs above:
 * 17 ("PUCE authentication")
 * 34 ("Refund w/o original")
 * 37 ("lottery prize")
 */
enum TransactionType: string
{

    /**
     * Se corresponde con el concepto que tenemos de pago clásico, en el cual el cliente introduce sus datos de tarjeta y el comercio realiza una petición al SIS con estos mismos
     * datos por un importe determinado.
     */
    case Authorization = '0';

    /**
     * Permite al comercio bloquear un cierto importe en la tarjeta del cliente, esto no supone realizar el pago, sino que trata de asegurar previo a un pago que el importe estará
     * disponible en su momento.
     */
    case Preauthorization = '1';

    /**
     * Permite al comercio hacer efectivo un cargo a un cliente al cual ha realizado previamente una operacion de preautorizacion por un importe determinado.
     */
    case ReplacementPreauthorization = '11';

    /**
     * Permite al comercio hacer efectivo un cargo a un cliente al cual ha realizado previamente una operacion de preautorizacion por un importe determinado
     */
    case Confirmation = '2';

    /**
     * Permite al comercio realizar una operación en la cual se devuelve el importe de un pago que ha realizado previamente el cliente en este comercio
     */
    case Refund = '3';

    /**
     * Permite al comercio validar si los datos de tarjeta introducidos son correctos. En esta validacion se realiza autenticacion del titular salvo que el comercio no posea
     * método de pago seguro.
     */
    case SeparatePreauthorization = '7';

    /**
     * Permite al comercio hacer efectivo un cargo a un cliente al cual ha realizado previamente una operacion de preautorización separada por un importe determinado
     */
    case SeparateConfirmation = '8';

    /**
     * Permite al comercio anular una preautorizacion que no ha sido confirmada, de este modo se libera el importe bloqueado con la preautorización al cliente. Se puede realizar
     * hasta 7 días después de la preautorización original.
     */
    case PreauthorizationCancellation = '9';

    /**
     * Permite al comercio anular un pago. Se puede realizar hasta 30 días después de la operación original.
     */
    case PaymentCancellation = '45';


    /**
     * Permite al comercio anular una Devolución. Se puede realizar hasta 2 días después de la operación original.
     */
    case RefundCancellation = '46';

    /**
     * Permite al comercio anular una confirmación separada. Se puede realizar hasta 30 días después de la operación original.
     */
    case SeparateConfirmationCancellation = '47';

    case Paygold = '15';

}
