<?php
// ⚠️ Reconstitué d'après la capture du syllabus (le vrai fichier est sur l'eCampus).
date_default_timezone_set('Europe/Brussels');

class Livraison
{
    public function __construct(
        public string $reference,
        public string $titre,
        public DateTimeImmutable $dateCommande,
        public DateTimeImmutable $dateEstimee,
        public ?DateTimeImmutable $dateLivraison = null,
    ) {
    }

    public function estLivree(): bool
    {
        return $this->dateLivraison !== null;
    }

    /**
     * true si la livraison effectuée a dépassé la date estimée,
     * ou si elle n'est pas encore livrée alors que la date estimée est passée.
     */
    public function retard(): bool
    {
        $reference = $this->dateLivraison ?? new DateTimeImmutable('today');
        return $reference > $this->dateEstimee;
    }

    /** Nombre de jours de retard d'une livraison effectuée (0 si à l'heure). */
    public function joursRetard(): int
    {
        if (!$this->estLivree() || !$this->retard()) return 0;
        return $this->dateEstimee->diff($this->dateLivraison)->days;
    }
}

$livraisons = [
    new Livraison('CMD001', 'Poster Céline Dion', new DateTimeImmutable('2026-08-20'),
        new DateTimeImmutable('2026-08-24'), new DateTimeImmutable('2026-08-23')),
    new Livraison('CMD002', 'Bandes dessinées', new DateTimeImmutable('2026-08-23'),
        new DateTimeImmutable('2026-08-26'), new DateTimeImmutable('2026-08-29')),
    new Livraison('CMD003', 'Fleurs', new DateTimeImmutable('2026-08-25'),
        new DateTimeImmutable('2026-09-03')),
    new Livraison('CMD004', 'Chaussettes', new DateTimeImmutable('2026-08-26'),
        new DateTimeImmutable('2026-08-29'), new DateTimeImmutable('2026-08-28')),
    new Livraison('CMD005', 'Coffret Blu-Ray', new DateTimeImmutable('2026-08-27'),
        new DateTimeImmutable('2026-09-06')),
    new Livraison('CMD006', 'Clavier AZERTY', new DateTimeImmutable('2026-08-29'),
        new DateTimeImmutable('2026-08-31')),
];
